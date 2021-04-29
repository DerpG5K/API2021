<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Parcel;
use App\Models\ParcelTpe;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ParcelTpeController extends Controller
{
    public function index(Order $order, Shipment $shipment,Parcel $parcel)
    {
        return $parcel->parcelTpe()->get();
    }

    public function show(Order $order, Shipment $shipment,Parcel $parcel, ParcelTpe $parcelTpe)
    {
        return $parcelTpe;
    }

    public function store(Request $request)
    {
        $parcelTpe = ParcelTpe::create($request->all());

        return response()->json($parcelTpe, 201);
    }

    public function update(Request $request, Order $order,Shipment $shipment, Parcel $parcel, ParcelTpe $parcelTpe)
    {
        $parcelTpe->update($request->all());

        return response()->json($parcelTpe, 200);
    }

    public function delete(Order $order, Shipment $shipment,Parcel $parcel, ParcelTpe $parcelTpe)
    {
        $parcelTpe->delete();

        return response()->json(null,204);
    }

}
