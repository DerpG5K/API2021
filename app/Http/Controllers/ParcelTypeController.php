<?php

namespace App\Http\Controllers;

use App\Models\ParcelType;
use Illuminate\Http\Request;

class ParcelTypeController extends Controller
{
    public function index()
    {
        return ParcelType::all();
    }

    public function show(ParcelType $parcelType)
    {
        return $parcelType;
    }

    public function store(Request $request)
    {
        $parcelType = ParcelType::create($request->all());

        return response()->json($parcelType, 201);
    }

    public function update(Request $request, ParcelType $parcelType)
    {

        $parcelType->update($request->all());

        return response()->json($parcelType, 200);
    }

    public function delete(ParcelType $parcelType)
    {

        $parcelType->delete();

        return response()->json(null,204);
    }
}
