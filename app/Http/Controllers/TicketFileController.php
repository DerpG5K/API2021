<?php

namespace App\Http\Controllers;

use App\Models\TicketFile;
use Illuminate\Http\Request;

class TicketFileController extends Controller
{
    public function index()
    {
        return TicketFile::all();
    }

    public function show(TicketFile $ticketFile)
    {
        return $ticketFile;
    }

    public function store(Request $request)
    {
        $ticketFile = TicketFile::create($request->all());

        return response()->json($ticketFile, 201);
    }

    public function update(Request $request, TicketFile $ticketFile)
    {
        $ticketFile->update($request->all());

        return response()->json($ticketFile, 200);
    }

    public function delete(TicketFile $ticketFile)
    {
        $ticketFile->delete();

        return response()->json(null,204);
    }
}
