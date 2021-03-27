<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //read
    public function index(){
        return Employee::all();
    }

    //read specific
    public function show($id){
        return Employee::find($id);
    }
    //create
    public function store(Request $request) {
        $employee = Employee::create($request->all);
        return response()->json($employee, 201);
    }
    //update
    public function update(Request $request, $id) {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json($employee, 200);
    }
    //delete
    public function delete(Request $request, $id) {
        Employee::find($id)->delete();

        return response()->json(null, 204);
    }
}