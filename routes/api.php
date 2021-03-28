<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Packages
Route::get('packages', 'PackagesController@index');
Route::get('packages/{id}', 'PackagesController@show');
Route::post('packages', 'PackagesController@store');
Route::put('packages/{id}', 'PackagesController@update');
Route::delete('packages/{id}', 'PackagesController@delete');

// Resource controllers
Route::resource('flights', 'FlightController', ['except' => ['create', 'edit']]);
Route::resource('parcels', 'ParcelController', ['except' => ['create', 'edit']]);
Route::resource('addresses', 'AddressController', ['except' => ['create', 'edit']]);
Route::resource('customs', 'CustomsController', ['except' => ['create', 'edit']]);
Route::resource('delivery_types', 'DeliveryTypeController', ['except' => ['create', 'edit']]);
Route::resource('orders', 'OrderController', ['except' => ['create', 'edit']]);
Route::resource('parcel_checks', 'ParcelCheckController', ['except' => ['create', 'edit']]);
Route::resource('parcel_types', 'ParcelTypeController', ['except' => ['create', 'edit']]);
Route::resource('products', 'ProductController', ['except' => ['create', 'edit']]);
