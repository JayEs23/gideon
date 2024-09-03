<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::with('course')->get();
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('assignments.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'course_id' => 'required|exists:courses,id',
            'due_date' => 'required|date',
        ]);

        Assignment::create($request->all());
        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully.');
    }

    public function show(Assignment $assignment)
    {
        return view('assignments.show', compact('assignment'));
    }

    public function edit(Assignment $assignment)
    {
        $courses = Course::all();
        return view('assignments.edit', compact('assignment', 'courses'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'course_id' => 'required|exists:courses,id',
            'due_date' => 'required|date',
        ]);

        $assignment->update($request->all());
        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully.');
    }
}
