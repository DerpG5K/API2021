<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::all();
    }

    public function show(Job $job)
    {
        return $job;
    }

    public function store(Request $request)
    {
        $job = Job::create($request->all());

        return response()->json($job, 201);
    }

    public function update(Request $request, Job $job)
    {
        $job->update($request->all());

        return response()->json($job, 200);
    }

    public function delete(Job $job)
    {
        $job->delete();

        return response()->json(null,204);
    }
}
