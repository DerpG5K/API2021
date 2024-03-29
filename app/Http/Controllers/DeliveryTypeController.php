<?php

namespace App\Http\Controllers;

use App\Models\DeliveryType;
use App\Models\Flight;
use App\Models\Order;
use App\Models\Parcel;
use Illuminate\Http\Request;

class DeliveryTypeController extends Controller
{
    public function index(Order $order, Parcel $parcel)
    {
        return $parcel->deliveryType()->get();
    }

    public function show(Order $order, Parcel $parcel,DeliveryType $deliveryType)
    {
        return $deliveryType;
    }

    public function store(Request $request)
    {
        $deliveryType = DeliveryType::create($request->all());

        return response()->json($deliveryType, 201);
    }

    public function update(Request $request, Order $order, Parcel $parcel,DeliveryType $deliveryType)
    {
        $deliveryType->update($request->all());

        return response()->json($deliveryType, 200);
    }

    public function delete(Order $order, Parcel $parcel,DeliveryType $deliveryType)
    {
        $deliveryType->delete();

        return response()->json(null,204);
    }
}
