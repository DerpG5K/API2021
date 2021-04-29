<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Parcel;
use App\Models\Address;
use App\Models\Shipment;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Order $order,  Shipment $shipment,Parcel $parcel)
    {
        if(!empty($parcel->toArray())){
            $result = [
                $parcel->depAddress()->get(),
                $parcel->destAddress()->get()
                ];
            return $result;
        }
        //in all other cases return ALL
        else{
            return Address::all();
        }
    }

    public function show(Order $order,Shipment $shipment,Parcel $parcel,Address $address)
    {
        return $address;
    }

    public function store(Request $request)
    {
        $address = Address::create($request->all());

        return response()->json($address, 201);
    }

    public function update(Request $request, Order $order,Shipment $shipment,Parcel $parcel,Address $address)
    {
        $address->update($request->all());

        return response()->json($address, 200);
    }

    public function delete(Order $order,Shipment $shipment,Parcel $parcel,Address $address)
    {
        $address->delete();

        return response()->json(null,204);
    }
}
