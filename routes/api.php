<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OfferController;
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

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [LoginController::class, 'logout']);

    Route::get('user', [UserController::class, 'current']);

    Route::patch('settings/profile', [ProfileController::class, 'update']);
    Route::patch('settings/password', [PasswordController::class, 'update']);
    Route::get('settings/countries' , [LocationController::class , 'listCountries']);
    Route::get('settings/cities' , [LocationController::class , 'listCitiesForCountry']);
    Route::post('orders/create' , [OrdersController::class, 'create']);
    Route::get('orders/{order}' , [OrdersController::class , 'edit'])->where('order' , '[0-9]+');;
    Route::get('orders/myorders' , [OrdersController::class, 'getMyOrders']);
    Route::get('orders/otherorders' , [OrdersController::class, 'getOthersOrders']);
    Route::patch('orders/{order}' , [OrdersController::class , 'store'])->where('order' , '[0-9]+');
    Route::delete('orders/{order}' , [OrdersController::class , 'destroy'])->where('order' , '[0-9]+');
    Route::get('orders/shared/{order}' , [OrdersController::class , 'participate'])->where('id' , '[0-9]+');
    Route::patch('orders/shared/{order}' , [OrdersController::class , 'storeParticipation'])->where('order' , '[0-9]+');
    Route::get('offers/orders' , [OfferController::class , 'getAvailableOrders']);
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
