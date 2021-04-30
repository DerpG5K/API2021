<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
            return Ticket::all();
    }

    public function show(Ticket $ticket)
    {
        return $ticket;
    }

    public function store(Request $request)
    {
        $ticket = Ticket::create($request->all());

        return response()->json($ticket, 201);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->update($request->all());

        return response()->json($ticket, 200);
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->files()->delete();
        $ticket->logs()->delete();
        $ticket->delete();

        return response()->json(null,204);
    }
}
