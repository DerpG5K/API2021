<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function index(Request $request,Order $order)
    {
        //check if the order value was passed, if so act accordingly to return result

        if(!empty($order->toArray())){
            return $order->shipments()->get();
        }
        //in all other cases return ALL
        else{
            return Shipment::all();
        }
    }

    public function show(Order $order,Shipment $shipment)
    {
        return $shipment;
    }

    public function store(Request $request)
    {
        $shipment = Shipment::create($request->all());

        return response()->json($shipment, 201);
    }

    public function update(Request $request, Order $order,Shipment $shipment)
    {
        $shipment->update($request->all());

        return response()->json($shipment, 200);
    }

    public function destroy(Order $order,Shipment $shipment)
    {
        $old = $shipment->toArray();
        $shipment->delete();

        return response()->json(null,204);
    }
}
