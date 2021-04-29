<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Parcel;
use App\Models\ParcelTpe;
use App\Models\Shipment;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(Order $order,Shipment $shipment)
    {
        return $shipment->status()->get();
    }

    public function show(Order $order, Shipment $shipment, Status $status)
    {
        return $status;
    }

    public function store(Request $request)
    {
        $status = Status::create($request->all());

        return response()->json($status, 201);
    }

    public function update(Request $request, Order $order, Shipment $shipment, Status $status)
    {
        $status->update($request->all());

        return response()->json($status, 200);
    }

    public function delete(Order $order, Shipment $shipment, Status $status)
    {
        $status->delete();

        return response()->json(null,204);
    }

}
