<?php

use App\Models\Packages;
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


//Route::get('packages', function() {
//    // If the Content-Type and Accept headers are set to 'application/json',
//    // this will return a JSON structure. This will be cleaned up later.
//    return Packages::all();
//});
//
//Route::get('packages/{id}', function($id) {
//    return Packages::find($id);
//});
//
//Route::post('packages', function(Request $request) {
//    return Packages::create($request->all);
//});
//
//Route::put('packages/{id}', function(Request $request, $id) {
//    $packages = Packages::findOrFail($id);
//    $packages->update($request->all());
//
//    return $packages;
//});
//
//Route::delete('packages/{id}', function($id) {
//    Packages::find($id)->delete();
//
//    return 204;
//});
Route::get('packages', 'App\Http\Controllers\PackagesController@index');
Route::get('packages/{id}', 'App\Http\Controllers\PackagesController@show');
Route::post('packages', 'App\Http\Controllers\PackagesController@store');
Route::put('packages/{id}', 'App\Http\Controllers\PackagesController@update');
Route::delete('packages/{id}', 'App\Http\Controllers\PackagesController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
