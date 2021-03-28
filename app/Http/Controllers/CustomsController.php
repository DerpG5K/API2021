<?php

namespace App\Http\Controllers;

use App\Models\Custom;
use Illuminate\Http\Request;

class CustomsController extends Controller
{
    public function index()
    {
        return Custom::all();
    }

    public function show(Custom $custom)
    {
        return $custom;
    }

    public function store(Request $request)
    {
        $custom = Custom::create($request->all());

        return response()->json($custom, 201);
    }

    public function update(Request $request, Custom $custom)
    {

        $custom->update($request->all());

        return response()->json($custom, 200);
    }

    public function delete(Custom $custom)
    {

        $custom->delete();

        return response()->json(null,204);
    }
}
