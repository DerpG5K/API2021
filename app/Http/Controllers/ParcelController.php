<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    public function index()
    {
        return Parcel::all();
    }

    public function show(Parcel $parcel)
    {
        return $parcel;
    }

    public function store(Request $request)
    {
        $parcel = Parcel::create($request->all());

        return response()->json($parcel, 201);
    }

    public function update(Request $request, Parcel $parcel)
    {

        $parcel->update($request->all());

        return response()->json($parcel, 200);
    }

    public function delete(Parcel $parcel)
    {

        $parcel->delete();

        return response()->json(null,204);
    }

    public function showFlight(Parcel $parcel)
    {
        return $parcel->flight();
    }
}
