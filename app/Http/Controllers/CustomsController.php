<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use App\Models\Order;
use App\Models\Parcel;
use Illuminate\Http\Request;

class CustomsController extends Controller
{
    public function index(Order $order,Parcel $parcel)
    {
        return Custom::all()->where('parcelId',$parcel->getKey());

    }

    public function show(Order $order,Parcel $parcel,Custom $custom)
    {
        return $custom;
    }

    public function store(Request $request)
    {
        $custom = Custom::create($request->all());

        return response()->json($custom, 201);
    }

    public function update(Request $request, Order $order,Parcel $parcel,Custom $custom)
    {
        $custom->update($request->all());

        return response()->json($custom, 200);
    }

    public function delete(Order $order,Parcel $parcel,Custom $custom)
    {
        $custom->delete();

        return response()->json(null,204);
    }
}
