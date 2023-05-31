<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function create()
    {
        return view('assignments');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'submission_type' => 'required',
        ]);

        assignment::create($validatedData);

        return redirect()->back()->with('success', 'Assignment submitted successfully.');
    }
}