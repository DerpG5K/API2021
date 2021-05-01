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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Resource controllers
Route::resource('flights', 'FlightController', ['except' => ['create', 'edit']]);
Route::resource('parcels', 'ParcelController', ['except' => ['create', 'edit']]);
Route::resource('addresses', 'AddressController', ['except' => ['create', 'edit']]);
Route::resource('customs', 'CustomsController', ['except' => ['create', 'edit']]);
Route::resource('delivery_types', 'DeliveryTypeController', ['except' => ['create', 'edit']]);
Route::resource('orders', 'OrderController', ['except' => ['create', 'edit']]);
Route::resource('parcel_checks', 'ParcelCheckController', ['except' => ['create', 'edit']]);
Route::resource('parcel_types', 'ParcelTypeController', ['except' => ['create', 'edit']]);
Route::resource('shipments', 'ShipmentController', ['except' => ['create', 'edit']]);
Route::resource('status', 'StatusController', ['except' => ['create', 'edit']]);


Route::resource('orders.shipments', 'ShipmentController');
Route::resource('orders.shipments.status', 'StatusController');
Route::resource('orders.shipments.addresses', 'AddressController');
Route::resource('orders.shipments.delivery_types', 'DeliveryTypeController');
Route::resource('orders.shipments.parcels', 'ParcelController');
Route::resource('orders.shipments.parcels.customs', 'CustomsController');
Route::resource('orders.shipments.parcels.parcel_checks', 'ParcelCheckController');
Route::resource('orders.shipments.parcels.flights', 'FlightController');
Route::resource('orders.shipments.parcels.parcel_types', 'ParcelTypeController');
Route::resource('orders.customer', 'CustomerController');

Route::resource('products', 'ProductController', ['except' => ['create', 'edit']]);
Route::resource('businesses', 'BusinessController', ['except' => ['create', 'edit']]);
Route::resource('customers', 'CustomerController', ['except' => ['create', 'edit']]);

Route::resource('tickets', 'TicketController', ['except' => ['create', 'edit']]);
Route::resource('tickets.ticket_categories', 'TicketCategoryController', ['except' => ['create', 'edit']]);
Route::resource('tickets.ticket_files', 'TicketFileController', ['except' => ['create', 'edit']]);
Route::resource('tickets.ticket_logs', 'TicketLogController', ['except' => ['create', 'edit']]);
Route::resource('tickets.ticket_states', 'TicketStateController', ['except' => ['create', 'edit']]);

Route::resource('ticket_categories', 'TicketCategoryController', ['except' => ['create', 'edit']]);
Route::resource('ticket_files', 'TicketFileController', ['except' => ['create', 'edit']]);
Route::resource('ticket_logs', 'TicketLogController', ['except' => ['create', 'edit']]);
Route::resource('ticket_states', 'TicketStateController', ['except' => ['create', 'edit']]);

Route::resource('Employees','EmployeeController', ['except' => ['create', 'edit']]);
Route::resource('Absences','AbsenceController', ['except' => ['create', 'edit']]);
Route::resource('Benefits', 'BenefitController', ['except' => ['create', 'edit']]);
Route::resource('Jobs', 'JobController', ['except' => ['create', 'edit']]);
Route::resource('JobDescriptions', 'JobDescriptionController', ['except' => ['create', 'edit']]);
Route::resource('JobOffers', 'JobOfferController', ['except' => ['create', 'edit']]);
Route::resource('Departments', 'DepartmentController', ['except' => ['create', 'edit']]);
