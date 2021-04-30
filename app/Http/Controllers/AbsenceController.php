<?php

namespace App\Http\Controllers;

use App\Models\Absences;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index()
    {
        return Absences::all();
    }

    public function show(Absences $absences)
    {
        return $absences;
    }

    public function store(Request $request)
    {
        $absences = Absences::create($request->all());

        return response()->json($absences, 201);
    }

    public function update(Request $request, Absences $absences)
    {
        $absences->update($request->all());

        return response()->json($absences, 200);
    }

    public function delete(Absences $absences)
    {
        $absences->delete();

        return response()->json(null,204);
    }
}
