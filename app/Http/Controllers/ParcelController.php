<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Parcel;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    public function index(Order $order)
    {
        return $order->parcels()->get();
    }

    public function show(Order $order,Parcel $parcel)
    {
        return $parcel;
    }

    public function store(Request $request)
    {
        $parcel = Parcel::create($request->all());

        return response()->json($parcel, 201);
    }

    public function update(Request $request, Order $order,Parcel $parcel)
    {
        $parcel->update($request->all());

        return response()->json($parcel, 200);
    }

//    public function delete(Order $order,Parcel $parcel)
//    {
//        $parcel->delete();
//
//        return response()->json(null,204);
//    }
    public function destroy(Order $order,Parcel $parcel)
    {
        $old = $parcel->toArray();
        $parcel->delete();

        return response()->json(null,204);
    }
}
