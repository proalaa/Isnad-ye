<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OfferController extends Controller
{
    public function getAvailableOrders(){

//        $orders = Order::all()->where('status' , 2)->load('Facilities')->pluck('facilities.*.pivot.products'); return only products
        $orders = Order::with('Facilities:id,name')->get();
        return $orders;
    }
}
