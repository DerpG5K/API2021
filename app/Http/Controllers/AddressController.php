<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Parcel;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Order $order, Parcel $parcel)
    {

        $addresses=[ 'departure address:',$parcel->depAddress()->get(), 'destination address:',$parcel->destAddress()->get()];

        return $addresses;
    }

    public function show(Order $order,Parcel $parcel,Address $address)
    {
        return $address;
    }

    public function store(Request $request)
    {
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    public function update(Request $request, Order $order,Parcel $parcel,Address $address)
    {
        $address->update($request->all());

        return response()->json($address, 200);
    }

    public function delete(Order $order,Parcel $parcel,Address $address)
    {
        $address->delete();

        return response()->json(null,204);
    }
}
