<?php

namespace App\Http\Controllers;

use App\Models\TicketCategory;
use Illuminate\Http\Request;

class TicketCategoryController extends Controller
{
    public function index()
    {
        return TicketCategory::all();
    }

    public function show(TicketCategory $ticketCategory)
    {
        return $ticketCategory;
    }

    public function store(Request $request)
    {
        $ticketCategory = TicketCategory::create($request->all());

        return response()->json($ticketCategory, 201);
    }

    public function update(Request $request, TicketCategory $ticketCategory)
    {
        $ticketCategory->update($request->all());

        return response()->json($ticketCategory, 200);
    }

    public function delete(TicketCategory $ticketCategory)
    {
        $ticketCategory->delete();

        return response()->json(null,204);
    }
}
