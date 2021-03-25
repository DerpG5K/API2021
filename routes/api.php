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

/** Customer routes **/

Route::get('customers', 'CustomerController@index');
Route::get('customers/{customer}', 'CustomerController@show');
Route::get('customers/{customer}/orders', 'CustomerController@orders'); // all orders from a customer
Route::post('customers', 'CustomerController@store');
Route::put('customers/{customer}', 'CustomerController@update');
Route::delete('customers/{customer}', 'CustomerController@delete');



/** Order routes **/

Route::get('orders', 'OrderController@index');
Route::get('orders/{order}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::put('orders/{order}', 'OrderController@update');
Route::delete('orders/{customer}', 'OrderController@delete');
