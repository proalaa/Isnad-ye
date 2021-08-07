<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Http\Resources\OrderResource;
use App\Models\Offer;
use App\Models\Order;
use Carbon\Carbon;
use Carbon\Traits\Creator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;
use function request as request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function getPublishedOrders()
    {
        $excluded_orders = Auth::user()->Offers()->pluck('order_id');
        $orders = Order::with('FacilityOrder')->whereNotIn('id' ,$excluded_orders)->where('status' ,'=', '3')->get();

        return OrderResource::collection($orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = Order::findOrFail($request->input('order'));
        $products = $order->FacilityOrder()->pluck('products')->flatten(1);
        return response()->json(['order' => $order , 'products' => $products] );

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {
        try {
            $offer = new Offer();
            $current = new Carbon();
            $offer->order_id = request('order_id');
            $offer->supplier_id = Auth::id();
            $offer->warranty_policy = request('warranty_policy');
            $offer->shipping_policy = request('shipping_policy');
            $offer->end_date = $current->copy()->addDays(request('validaty'));
            $offer->total = request('total');
            $offer->min_price = request('min_price');
            $offer->delivery_duration = request('delivery_duration');
            $offer->products = request('products');
            $offer->save();
        }
        catch (Throwable $exception)
        {
            return response()->json(['status' => 'error','message' => $exception->getMessage() ] , 500);
        }

        return response()->json(['status' => 'success','message' => 'تم إنشاء العرض بنجاح' ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    private function ManipulateOffer(Offer $offer): void
    {

//              $offer->notices = \request('notices');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
