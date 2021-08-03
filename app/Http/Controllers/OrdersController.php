<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdersRequest;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Http\Resources\sharedOrdersResource;
use App\Models\Order;
use App\Models\User;
use Carbon\Traits\Creator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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

    public function getOthersOrders()
    {
//        $facilities = User::Facility()->with('Orders')->whereHas('Orders' ,function ($q){
//            $q->where('is_shareable' , true);
//        })->get();
//        $orders = Order::with('Facilities:id')

//        return Order::With('Facilities:id')->get()->each(function($order){
//            $order->facilities->map(function($facility){
//                $facility->products = $facility->pivot->products;
//                unset($facility->pivot);
//                return $facility;
//            });
//        });



       $facilities = Order::whereHas('Facilities' , function ($q){
            $q->Where('users.id'  , Auth::id());
        })->pluck('id');
       $orders = Order::with('Facilities')->where('is_shareable' , true)->whereNotIn('id',$facilities);
        return OrderResource::collection($orders->get())->response();

//        $facilty_orders = DB::table('facility_order')->where('facility_id' ,'!=' ,Auth::id())->pluck('order_id');
//         $orders = Order::whereIn('id' , $facilty_orders)->where('is_shareable' , true)->get();
//        dd(Order::all());
//        $attributes = Order::with('facilities')->whereHas('facilities', function ($query) {
//            $query->where('pivot.facility_id', true);
//        })->get();

        return $facilities;

//        dd($attributes);
//        return $attributes;
//         $orders = Order::where('is_shareable' , true)->whereHas('facilities' , function ($q){
//             return $q->where('facilities.id' , Auth::id());
//         })->get();
//            return $orders;
//        return $orders;
//        $orders = Order::with('facilities:id,name')->where('owner_id', '!=', Auth::id());
//
//        return OrderResource::collection($orders->get())->response();
    }
    public function create(OrdersRequest $request)
    {
        try {
            $order = new Order();
            $this->ManipulateOrder($order);

            Auth::user()->Orders()->attach($order,['is_owner' => true  , 'products' => json_encode($request->get('products'))] );

            return response()->json(['message' => 'Success']);
        }
        catch (Exception $exception)
        {
            return response()->json(['message' => $exception->getMessage()]);
        }
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
    public function store(Request $request)
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
            dd($exception);
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
        $current = new Carbon();

        $order->is_shareable = request('is_shareable');
        $order->shareable_until = $current->copy()->addDays(request('post_period'));
        $order->open_until = $order->shareable_until->copy()->addDays(request('open_duration'));
        $order->votable_until = $order->open_until->copy()->addDays(request('vote_duration'));
        $order->owner_id = $order->owner_id = Auth::user()->id;
        $order->save();
    }

}
