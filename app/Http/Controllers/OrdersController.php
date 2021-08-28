<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdersRequest;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Http\Resources\sharedOrdersResource;
use App\Models\FacilityOrder;
use App\Models\Offer;
use App\Models\Order;
use App\Models\User;
use Carbon\Traits\Creator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\Seller;
use LaravelDaily\Invoices\Invoice;
use Symfony\Component\Console\Input\Input;
use Throwable;

class OrdersController extends Controller
{

    public function getMyOrders(Request $request)
    {
        $user = Auth::user();

        $orders = $user->Orders()->with('facilities:id,name');
        if($request->exists('only_sharable') &&  $request->input('only_sharable'))
        {
            return OrderResource::collection($orders->wherePivot('is_owner' , false)->get())->response();
        }
        return  OrderResource::collection($orders->wherePivot('is_owner' , true)->get())->response();

//        $orders = $user->orders->;
//        return  OrderResource::collection($orders->paginate(20))->response(); //eager loading
//        return new OrderResource($orders->);//eager loading
//        $orders = Order::with('owner:id,name')->get(); //eager loading
    }
    public function getRelatedOffers(Order $order)
    {
        $orderOffers =  Order::with(['Offers' , 'FacilityOrder'])->findOrFail($order->id);
//        return $order->get();
        return $orderOffers;
//        return $order->select('id')->get()->load('Offers');
    }
    public function getOthersOrders()
    {
       $facilities = Order::whereHas('Facilities' , function ($q){
            $q->Where('users.id'  , Auth::id());
        })->pluck('id');
       $orders = Order::with('Facilities')->where('is_shareable' , true)->whereNotIn('id',$facilities);
        return OrderResource::collection($orders->get())->response();
        return $facilities;
    }
    public function skipStatus(Order $order)
    {
        try {
            $order->status =strval( $order->status + 1); ;
            $order->save();

            if(!$order->is_shareable)
            {
                if($order->status == '2')
                {
                    $this->skipStatus($order);
                }

            }
            if($order->status == '3')
            {
                $order->offers()->update([
                    'status' => '1'
                ]);
            }
            if($order->status == '4')
            {
                $order->offers()->update([
                    'status' => '2'
                ]);
            }
            if($order->status == '5')
            {
                $order->offers()->update([
                    'status' => '3'
                ]);
                $this->checkUnvalidatedVoters($order);
                dd($this->postInvoice($order));
            }

            return response()->json(['message' => 'تم تخطي هذه المرحلة بنجاح']);
        }
        catch (Exception $exception)
        {
            return response()->json(['message' => $exception->getMessage()] , 500);
        }
    }
    public function voteOnOffer($order_id , $offer_id)
    {
        try {
            $subscription = FacilityOrder::where(['order_id' => $order_id , 'facility_id' => Auth::id()]);
            $subscription->update(['voted_for' => $offer_id]);
        }
        catch (Throwable $exception)
        {
            return response()->json(['message' => $exception->getMessage()] , 500);
        }
        return response()->json(['message' => 'Success']);

    }
    public function postInvoice(Order $order){

        try {
            $subscriptions = $order->offers()->where('status' , '3')->get()->pluck('voters')->first();
            foreach ($subscriptions as $subscription)
            {
                $subscriptionProducts = $subscription->products;
                $offerProducts = $subscription->Offer->products;
                $invoiceItems = array();
                foreach ($subscriptionProducts as $subProduct)
                {
                    foreach ($offerProducts as $offProduct)
                    {
                        if($subProduct->name == $offProduct['name'])
                        {
                            $pricePerUnit = ($offProduct['price'] / $offProduct['quantity'] );
                            $total = $pricePerUnit * $subProduct->quantity;
                            array_push($invoiceItems ,
                                (new InvoiceItem())
                                    ->title($subProduct->name)
                                    ->pricePerUnit($pricePerUnit)
                                    ->quantity($subProduct->quantity)
                                    ->discountByPercent(0)
                                    ->taxByPercent(0)
                                    ->units($subProduct->unit)
                                    ->subTotalPrice($total)
                            );
                        }
                    }
                }

                $supplier = $subscription->offer->supplier;
                $facility = $subscription->Subscriber;
                $customer = new Buyer([
                    'name'          => $facility->name,
                    'custom_fields' => [
                        'email' => $facility->email,
                    ],
                ]);
                $client = new Party([
                    'name'          => $supplier->name,
                    'phone'         => $supplier->phone_number,
                ]);
                App::setLocale('ar');
                $invoice = new Invoice();
                $invoice = $invoice->filename('_OF_' . $subscription->voted_for . '_CL_' . $facility->id )
                    ->buyer($customer)
                    ->seller($client)
                    ->currencyFormat('{VALUE} {SYMBOL}')
                    ->addItems($invoiceItems);
                $invoice->save('public');
                $subscription->update(['invoice' => $invoice->url()]);
            }
        }
        catch (Throwable $exception){
            return  $exception->getTrace();
        }
         return true;
    }
    public function getInvoice(Order $order)
    {
        $subscription = $order->FacilityOrder()->where(['facility_id' => Auth::id()])->first();
        return $subscription->invoice;
    }


    public function WithdrawVote($order_id)
    {

        try {
            $subscription = FacilityOrder::where(['order_id' => $order_id , 'facility_id' => Auth::id()]);
            $subscription->update(['voted_for' => null]);
        }
        catch (Throwable $exception)
        {
            return response()->json(['message' => $exception->getMessage()] , 500);
        }
        return response()->json(['message' => 'Success']);

    }
    public function publishOrder(Order $order)
    {

        try {
            $order->posted_at =  Carbon::now();;
            if($order->is_shareable)
                $order->status = '2' ;
            else
                $order->status = '3';
            $order->save();

            return response()->json(['message' => 'Success']);
        }
        catch (Throwable $exception)
        {
            return response()->json(['message' => 'error'] , 500);
        }
    }
    public function saveAsDraft()
    {
        $order->status = 1;
    }


    public function store(OrdersRequest $request)
    {

        try {
            $order = new Order();
            if($request->input('save_as_draft')) {
                $order->status = '1';
            }
            else
            {
                $order->posted_at = Carbon::now();
                if ($request->input('is_shareable'))
                    $order->status = '2';
                else
                    $order->status = '3';
            }
                $this->ManipulateOrder($order);

            $products =[];
            $products = request('products');
            foreach (request('products') as $key => $product)
            {
                if($product['image'] ?? false)
                {
                    $path= request('products.' . $key .'.image')->store('products');
                    $products[$key]['image'] = $path;
                }
            }
            Auth::user()->Orders()->attach($order,['is_owner' => true  , 'products' => json_encode($products)]);

            return response()->json(['message' => 'Success']);
        }
        catch (Exception $exception)
        {
            return response()->json(['message' => $exception->getMessage()]);
        }
    }

    public function deleteProductImage($order , $request)
    {
        Auth::user()->Orders()->updateExistingPivot($order->id , [
            'products' => $request->products
        ]);

    }
//    public function show(Order $order)
//    {
//        return new OrderResource($order);
//    }
    public function edit(Order $order)
    {
        $order = Auth::user()->Orders()->find($order->id);
        return new OrderResource($order);
    }
    public function update(OrdersRequest $request)
    {
        try {
            $order = Auth::user()->Orders()->find($request->input('id'));
            $this->ManipulateOrder($order);
//        dd($order);
            Auth::user()->Orders()->updateExistingPivot($order->id , [
                'products' => $request->products
            ]);
        }
        catch (Throwable $exception)
        {
            return response()->json(['status' => 'error','message' => 'فشل' ]);
        }

        return response()->json(['status' => 'ok','message' => 'تم تعديل الطلب بنجاح' ]);
    }
    public function participate(Order $order){

        return new OrderResource($order);

    }
    public function storeParticipation(OrdersRequest $request)
    {
        try {
            $order = Order::find($request->input('id'));

            $fff = Auth::user()->Orders()->attach($order,['is_owner' => false , 'products' => json_encode($request->get('products'))] );
        }
        catch (Exception $exception)
        {
            return response()->json(['status' => 'error','message' => $exception  ] , 500);
        }
        return response()->json(['status' => 'success','message' => 'تم الاشتراك في الطلب بنجاح' ]);

    }

    public function destroy(Order $order)
    {
        try {
            $order->delete();
        }
        catch (Throwable $exception)
        {
            return response()->json(['status'=>'error','message' => $exception->getMessage()]);
        }
        return response()->json(['status' => 'success','message' => 'تم حذف الطلب بنجاح' ]);
    }

    /**
     * @param OrdersRequest $request
     * @param Order $order
     * @param Carbon $current
     */
    private function ManipulateOrder(Order $order): void
    {

        $order->is_shareable = request('is_shareable');
        $order->share_duration = request('share_duration');
        $order->open_duration = request('open_duration');
        $order->vote_duration = request('vote_duration');
        $order->owner_id = $order->owner_id = Auth::user()->id;
        $order->save();
    }
    private function checkUnvalidatedVoters($order)
    {
        foreach ($order->Offers as $offer)
        {
            $total = 0;
            $products = [];
            foreach ($offer->Voters as $voter)
            {
                $products = array_merge_recursive($products , $voter->products);
            }
            foreach ($offer->products as $offProduct)
            {
                foreach ($products as $subProduct) {
                    if($subProduct->name == $offProduct['name'])
                    {
                        $pricePerUnit = ($offProduct['price'] / $offProduct['quantity'] );
                        $total+= $pricePerUnit * $subProduct->quantity;
                    }
                }
            }
            if((int)$total < (int)$offer->min_price){
                $ids = $offer->pluck('id');
                Offer::whereIn('id' , $ids)->update([
                    'status' => '0'
                ]);
                $offer->Voters()->update([
                    'status' => '0'
                ]);
            }
        }
    }
}
