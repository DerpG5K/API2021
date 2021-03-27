<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Employees
Route::get('employees', 'App\Http\Controllers\EmployeeController@index');
Route::get('employees/{id}', 'App\Http\Controllers\EmployeeController@show');
Route::post('employees', 'App\Http\Controllers\EmployeeController@store');
Route::put('employees/{id}', 'App\Http\Controllers\EmployeeController@update');
Route::delete('employees/{id}', 'App\Http\Controllers\EmployeeController@delete');