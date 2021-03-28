<?php

namespace App\Http\Controllers;

use App\Models\DeliveryType;
use App\Models\Flight;
use Illuminate\Http\Request;

class DeliveryTypeController extends Controller
{
    public function index()
    {
        return DeliveryType::all();
    }

    public function show(DeliveryType $deliveryType)
    {
        return $deliveryType;
    }

    public function store(Request $request)
    {
        $deliveryType = DeliveryType::create($request->all());

        return response()->json($deliveryType, 201);
    }

    public function update(Request $request, DeliveryType $deliveryType)
    {
        $deliveryType->update($request->all());

        return response()->json($deliveryType, 200);
    }

    public function delete(DeliveryType $deliveryType)
    {
        $deliveryType->delete();

        return response()->json(null,204);
    }
}
