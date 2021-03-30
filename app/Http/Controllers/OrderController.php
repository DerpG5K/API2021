<?php

namespace App\Http\Controllers;
use App\Models\Address;
use App\Models\Order;
use App\Models\Parcel;
use Illuminate\Http\Request;
use App\Models;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());

        return response()->json($order, 201);
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        return response()->json($order, 200);
    }

    public function delete(Order $order)
    {
        $order->delete();

        return response()->json(null,204);
    }
    public function parcels($id)
    {
        $parcels = Parcel::all()->where('orderId',$id);

        return $parcels;

    }
    public function parcelDetail($id, $pid)
    {
        $parcel = Parcel::all()
            ->where('id',$pid);
        return $parcel;
    }

    public function parcelDepAddress($aid)
    {
        $depAddress = Address::all()
            ->where('id',$aid);
        return $depAddress;
    }

    public function parcelDestAddress($pid)
    {
        $parcel = Parcel::all()
            ->where('id',$pid);
        return $parcel;
    }
}
