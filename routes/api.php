<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Resource controllers
Route::resource('flights', 'FlightController', ['except' => ['create', 'edit']]);
Route::resource('parcels', 'ParcelController', ['except' => ['create', 'edit']]);
Route::resource('addresses', 'AddressController', ['except' => ['create', 'edit']]);
Route::resource('customs', 'CustomsController', ['except' => ['create', 'edit']]);
Route::resource('delivery_types', 'DeliveryTypeController', ['except' => ['create', 'edit']]);
Route::resource('orders', 'OrderController', ['except' => ['create', 'edit']]);
Route::resource('parcel_checks', 'ParcelCheckController', ['except' => ['create', 'edit']]);
Route::resource('parcel_types', 'ParcelTypeController', ['except' => ['create', 'edit']]);

Route::resource('orders.parcels', 'ParcelController');
Route::resource('orders.parcels.address', 'AddressController');
Route::resource('orders.parcels.customs', 'CustomsController');
Route::resource('orders.parcels.parcelCheck', 'ParcelCheckController');
Route::resource('orders.parcels.flight', 'FlightController');
Route::resource('orders.parcels.deliveryType', 'DeliveryTypeController');
Route::resource('orders.parcels.parcelType', 'ParcelTypeController');
Route::resource('orders.customer', 'CustomerController');
