<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Order;
use App\Models\Parcel;
use App\Models\Shipment;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(Order $order, Shipment $shipment,Parcel $parcel)
    {
        //check if the Parcel value was passed, if so act accordingly to return result

        if(!empty($parcel->toArray())){
            return $parcel->flight()->get();
        }
        //in all other cases return ALL
        else{
            return Flight::all();
        }
    }

    public function show(Order $order, Shipment $shipment,Parcel $parcel,Flight $flight)
    {
        return $flight;
    }

    public function store(Request $request)
    {
        $flight = Flight::create($request->all());

        return response()->json($flight, 201);
    }

    public function update(Request $request, Order $order, Shipment $shipment,Parcel $parcel,Flight $flight)
    {
        $flight->update($request->all());

        return response()->json($flight, 200);
    }

    public function delete(Order $order, Shipment $shipment,Parcel $parcel,Flight $flight)
    {
        $flight->delete();

        return response()->json(null,204);
    }
}
