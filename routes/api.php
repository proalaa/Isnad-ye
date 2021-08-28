<?php

use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\Settings\PasswordController;
use App\Http\Controllers\Settings\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routescountries
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'admin:api'],function (){
    Route::get('admin/statistics' , [AdminController::class , 'getStatistics']);
    Route::get('admin/users' , [AdminController::class , 'getAllUser']);
    Route::patch('admin/users/{user}/toggle-user' , [AdminController::class , 'toggleUserActivity']);
    Route::get('admin/orders' , [AdminController::class , 'getAllOrders']);
    Route::get('admin/offers' , [AdminController::class , 'getAlloffers']);
});
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);

    Route::get('user', [UserController::class, 'current']);
    Route::get('offers/{offer}/invoices' , [OffersController::class , 'getInvoices'])->where('offer' , '[0-9]+');;
    Route::post('settings/profile', [ProfileController::class, 'update']);
    Route::patch('settings/password', [PasswordController::class, 'update']);
    Route::get('settings/countries' , [LocationController::class , 'listCountries']);
    Route::get('settings/cities' , [LocationController::class , 'listCitiesForCountry']);
    Route::post('orders/create' , [OrdersController::class, 'store']);
    Route::get('orders/{order}' , [OrdersController::class , 'edit'])->where('order' , '[0-9]+');;
    Route::put('orders/{order}/publish' , [OrdersController::class , 'publishOrder'])->where('order' , '[0-9]+');
    Route::get('orders/myorders' , [OrdersController::class, 'getMyOrders']);
    Route::get('orders/otherorders' , [OrdersController::class, 'getOthersOrders']);
    Route::get('orders/{order}/offers' , [OrdersController::class, 'getRelatedOffers']);
    Route::delete('orders/withdraw/{order}' , [OrdersController::class, 'withdrawVote']);
    Route::patch('orders/vote/{order}/{offer}' , [OrdersController::class, 'voteOnOffer']);
//    Route::post('orders/{order}/invoice' , [OrdersController::class , 'postInvoice']);
    Route::get('orders/{order}/invoice' , [OrdersController::class , 'getInvoice']);
    Route::post('orders/{order}/update' , [OrdersController::class , 'update'])->where('order' , '[0-9]+');
    Route::post('orders/{order}/update' , [OrdersController::class , 'update'])->where('order' , '[0-9]+');
    Route::patch('orders/{order}/skipstatus' , [OrdersController::class , 'skipStatus'])->where('order' , '[0-9]+');
    Route::delete('orders/{order}' , [OrdersController::class , 'destroy'])->where('order' , '[0-9]+');
    Route::get('orders/shared/{order}' , [OrdersController::class , 'participate'])->where('id' , '[0-9]+');
    Route::patch('orders/shared/{order}' , [OrdersController::class , 'storeParticipation'])->where('order' , '[0-9]+');
    Route::get('orders/published' , [OffersController::class , 'getPublishedOrders'] );
    Route::resource('offers' , OffersController::class);


});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [RegisterController::class, 'register']);

    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail']);
    Route::post('password/reset', [ResetPasswordController::class, 'reset']);

    Route::post('email/verify/{user}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend']);

    Route::post('oauth/{driver}', [OAuthController::class, 'redirect']);
    Route::get('oauth/{driver}/callback', [OAuthController::class, 'handleCallback'])->name('oauth.callback');

});
