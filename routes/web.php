<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
//Route::get('/portal/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('Employee Login');

Route::get('portal/login', 'Auth\LoginController@showLoginForm')->name('Employee login');
Route::post('portal/login', 'Auth\LoginController@Employeelogin')->name('Employee login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('customer/login', 'Auth\LoginController@showLoginForm');
Route::post('customer/login', 'Auth\LoginController@Customerlogin');


Route::get('customer/sign-me-up', 'Auth\RegisterController@showRegistrationForm')->name('Customer signup');
Route::post('customer/sign-me-up', 'Auth\RegisterController@register')->name('Customer signup');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




