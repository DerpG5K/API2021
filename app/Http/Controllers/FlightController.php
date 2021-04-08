<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Order;
use App\Models\Parcel;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(Order $order, Parcel $parcel)
    {
        return $parcel->flight()->get();
    }

    public function show(Order $order, Parcel $parcel,Flight $flight)
    {
        return $flight;
    }

    public function store(Request $request)
    {
        $flight = Flight::create($request->all());

        return response()->json($flight, 201);
    }

    public function update(Request $request, Order $order, Parcel $parcel,Flight $flight)
    {
        $flight->update($request->all());

        return response()->json($flight, 200);
    }

    public function delete(Order $order, Parcel $parcel,Flight $flight)
    {
        $flight->delete();

        return response()->json(null,204);
    }
}
