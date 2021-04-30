<?php

namespace App\Http\Controllers;

use App\Models\TicketState;
use Illuminate\Http\Request;

class TicketStateController extends Controller
{
    public function index()
    {
        return TicketState::all();
    }

    public function show(TicketState $ticketState)
    {
        return $ticketState;
    }

    public function store(Request $request)
    {
        $ticketState = TicketState::create($request->all());

        return response()->json($ticketState, 201);
    }

    public function update(Request $request, TicketState $ticketState)
    {
        $ticketState->update($request->all());

        return response()->json($ticketState, 200);
    }

    public function delete(TicketState $ticketState)
    {
        $ticketState->delete();

        return response()->json(null,204);
    }
}
