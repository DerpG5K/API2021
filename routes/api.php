<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Packages
Route::get('packages', 'PackagesController@index');
Route::get('packages/{id}', 'PackagesController@show');
Route::post('packages', 'PackagesController@store');
Route::put('packages/{id}', 'PackagesController@update');
Route::delete('packages/{id}', 'PackagesController@delete');

//Employees
Route::get('employees', 'EmployeeController@index');
Route::get('employees/{id}', 'EmployeeController@show');
Route::post('employees', 'EmployeeController@store');
Route::put('employees/{id}', 'EmployeeController@update');
Route::delete('employees/{id}', 'EmployeeController@delete');

//Customers
Route::get('customers', 'CustomerController@index');
Route::get('customers/{customer}', 'CustomerController@show');
Route::get('customers/{customer}/orders', 'CustomerController@orders'); // all orders from a customer
Route::post('customers', 'CustomerController@store');
Route::put('customers/{customer}', 'CustomerController@update');
Route::delete('customers/{customer}', 'CustomerController@delete');

//Orders
Route::get('orders', 'OrderController@index');
Route::get('orders/{order}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::put('orders/{order}', 'OrderController@update');
Route::delete('orders/{customer}', 'OrderController@delete');
