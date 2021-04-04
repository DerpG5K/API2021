<?php

use Illuminate\Support\Facades\Route;

// Resource controllers
Route::resource('flights', 'FlightController', ['except' => ['create', 'edit']]);
Route::resource('parcels', 'ParcelController', ['except' => ['create', 'edit']]);
Route::resource('addresses', 'AddressController', ['except' => ['create', 'edit']]);
Route::resource('customs', 'CustomsController', ['except' => ['create', 'edit']]);
Route::resource('delivery_types', 'DeliveryTypeController', ['except' => ['create', 'edit']]);
Route::resource('orders', 'OrderController', ['except' => ['create', 'edit']]);


Route::resource('orders.parcels', 'ParcelController');
Route::resource('orders.parcels.address', 'AddressController');
Route::resource('orders.parcels.customs', 'CustomsController');
Route::resource('orders.parcels.parcelCheck', 'ParcelCheckController');
Route::resource('orders.parcels.flight', 'FlightController');
Route::resource('orders.parcels.deliveryType', 'DeliveryTypeController');
Route::resource('orders.parcels.parcelType', 'ParcelTypeController');
Route::resource('orders.customer', 'CustomerController');



Route::resource('parcel_checks', 'ParcelCheckController', ['except' => ['create', 'edit']]);
Route::resource('parcel_types', 'ParcelTypeController', ['except' => ['create', 'edit']]);
Route::resource('products', 'ProductController', ['except' => ['create', 'edit']]);
Route::resource('businesses', 'BusinessController', ['except' => ['create', 'edit']]);
Route::resource('customers', 'CustomerController', ['except' => ['create', 'edit']]);
Route::resource('tickets', 'TicketController', ['except' => ['create', 'edit']]);
Route::resource('ticket_categories', 'TicketCategoryController', ['except' => ['create', 'edit']]);
Route::resource('ticket_files', 'TicketFileController', ['except' => ['create', 'edit']]);
Route::resource('ticket_logs', 'TicketLogController', ['except' => ['create', 'edit']]);
Route::resource('ticket_states', 'TicketStateController', ['except' => ['create', 'edit']]);
