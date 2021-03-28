<?php

namespace App\Http\Controllers;

use App\Models\TicketLog;
use Illuminate\Http\Request;

class TicketLogController extends Controller
{
    public function index()
    {
        return TicketLog::all();
    }

    public function show(TicketLog $ticketLog)
    {
        return $ticketLog;
    }

    public function store(Request $request)
    {
        $ticketLog = TicketLog::create($request->all());

        return response()->json($ticketLog, 201);
    }

    public function update(Request $request, TicketLog $ticketLog)
    {
        $ticketLog->update($request->all());

        return response()->json($ticketLog, 200);
    }

    public function delete(TicketLog $ticketLog)
    {
        $ticketLog->delete();

        return response()->json(null,204);
    }
}
