<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Parcel;
use App\Models\ParcelCheck;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ParcelCheckController extends Controller
{
    public function index(Order $order,Shipment $shipment, Parcel $parcel)
    {
        return ParcelCheck::all()->where('parcelId',$parcel->getKey());
    }

    public function show(Order $order,Shipment $shipment,Parcel $parcel,ParcelCheck $parcelCheck)
    {
        return $parcelCheck;
    }

    public function store(Request $request)
    {
        $parcelCheck = ParcelCheck::create($request->all());

        return response()->json($parcelCheck, 201);
    }

    public function update(Request $request, Order $order,Shipment $shipment, Parcel $parcel,ParcelCheck $parcelCheck)
    {
        $parcelCheck->update($request->all());

        return response()->json($parcelCheck, 200);
    }

    public function delete(Order $order,Shipment $shipment, Parcel $parcel,ParcelCheck $parcelCheck)
    {
        $parcelCheck->delete();

        return response()->json(null,204);
    }
}
