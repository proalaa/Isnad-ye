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
        return  OrderResource::collection($orders->get())->response();

//        $orders = $user->orders->;
//        return  OrderResource::collection($orders->paginate(20))->response(); //eager loading
//        return new OrderResource($orders->);//eager loading
//        $orders = Order::with('owner:id,name')->get(); //eager loading
    }
    public function getOthersOrders()
    {
//        dd(User::Facility()->with('orders')->get());
//        dd(Order::with('facilities')->whereHas('facilities', function ($query) {
//            return $query->pivot;
//        })->get());

////        return User::Facility()->with('orders')->get();
//        $otherFacilities = User::Facility()->get()->where('id' , '!=',Auth::id());
//
//        $otherFacilities->load('orders');
//        return ;
//        foreach ($otherFacilities as $facility)
//        {
//            foreach ($facility->orders as $order)
//            {
//                dd($order->pivot->products);
//            }
//
//        }
//        $otherFacilities = User::Facility()->where('id' , '!=',Auth::id());
//        $otherFacilities;
//        return $otherFacilities;
        $orders = Order::with('facilities:id,name')->where('owner_id', '!=', Auth::id());

        return OrderResource::collection($orders->get())->response();
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
            dd($fff);
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
