<?php

use Illuminate\Support\Facades\Route;

Route::get('packages', 'PackagesController@index');
Route::get('packages/{id}', 'PackagesController@show');
Route::post('packages', 'PackagesController@store');
Route::put('packages/{id}', 'PackagesController@update');
Route::delete('packages/{id}', 'PackagesController@delete');
