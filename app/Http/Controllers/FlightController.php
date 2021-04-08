<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        return Flight::all();
    }

    public function show(Flight $flight)
    {
        return $flight;
    }

    public function store(Request $request)
    {
        $flight = Flight::create($request->all());

        return response()->json($flight, 201);
    }

    public function update(Request $request, Flight $flight)
    {
        $flight->update($request->all());

        return response()->json($flight, 200);
    }

    public function delete(Flight $flight)
    {
        $flight->delete();

        return response()->json(null,204);
    }
}
