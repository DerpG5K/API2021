<?php

namespace App\Http\Controllers;

use App\Models\ParcelCheck;
use Illuminate\Http\Request;

class ParcelCheckController extends Controller
{
    public function index()
    {
        return ParcelCheck::all();
    }

    public function show(ParcelCheck $parcelCheck)
    {
        return $parcelCheck;
    }

    public function store(Request $request)
    {
        $parcelCheck = ParcelCheck::create($request->all());

        return response()->json($parcelCheck, 201);
    }

    public function update(Request $request, ParcelCheck $parcelCheck)
    {
        $parcelCheck->update($request->all());

        return response()->json($parcelCheck, 200);
    }

    public function delete(ParcelCheck $parcelCheck)
    {
        $parcelCheck->delete();

        return response()->json(null,204);
    }
}
