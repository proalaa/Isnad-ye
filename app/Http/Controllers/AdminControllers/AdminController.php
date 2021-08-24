<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\OrdersController;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Models\Offer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getStatistics()
    {
        $ordersCount = Order::count();
        $offersCount = Offer::count();
        $facilitiesCount = User::Facility()->count();
        $supplierCounts = User::Supplier()->count();
        return ['facility' => $facilitiesCount , 'supplier' => $supplierCounts , 'order' => $ordersCount , 'offer' => $offersCount];
    }
    public function getAllUser()
    {
        return response()->json(User::latest()->paginate(5));
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function toggleUserActivity(User $user): \Illuminate\Http\JsonResponse
    {
        try {
            $user->update(['active' => !$user->active ]);
        }
        catch (\Throwable $exception){
            return response()->json(['message' => $exception->getMessage()] , $exception->getCode());
        }
        dd($user);
        return response()->json(['message' => 'تم تغيير حالة المستخدم بنجاح']);
    }
    public function getAllOrders()
    {
        $orders = Order::paginate(5);
        return OrderResource::collection($orders);
    }
    public function getAlloffers()
    {

    }
}
