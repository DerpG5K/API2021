<?php

use Illuminate\Support\Facades\Route;

Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

Route::get('packages', 'PackagesController@index');
Route::get('packages/{id}', 'PackagesController@show');
Route::post('packages', 'PackagesController@store');
Route::put('packages/{id}', 'PackagesController@update');
Route::delete('packages/{id}', 'PackagesController@delete');
