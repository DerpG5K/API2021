<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Parcel;
use App\Models\ParcelType;
use Illuminate\Http\Request;

class ParcelTypeController extends Controller
{
    public function index(Order $order, Parcel $parcel)
    {
        return $parcel->parcelType()->get();
    }

    public function show(Order $order, Parcel $parcel,ParcelType $parcelType)
    {
        return $parcelType;
    }

    public function store(Request $request)
    {
        $parcelType = ParcelType::create($request->all());

        return response()->json($parcelType, 201);
    }

    public function update(Request $request, Order $order, Parcel $parcel,ParcelType $parcelType)
    {
        $parcelType->update($request->all());

        return response()->json($parcelType, 200);
    }

    public function delete(Order $order, Parcel $parcel,ParcelType $parcelType)
    {
        $parcelType->delete();

        return response()->json(null,204);
    }

}
