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
