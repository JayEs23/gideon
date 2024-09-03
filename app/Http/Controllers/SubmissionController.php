<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Assignment;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::with('student', 'assignment', 'project')->get();
        return view('submissions.index', compact('submissions'));
    }

    public function create()
    {
        $assignments = Assignment::all();
        $projects = Project::all();
        $students = Student::all();
        return view('submissions.create', compact('assignments', 'projects', 'students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'assignment_id' => 'nullable|exists:assignments,id',
            'project_id' => 'nullable|exists:projects,id',
            'submitted_at' => 'required|date',
            'file_path' => 'required|string',
            'grade' => 'nullable|integer|min:0|max:100',
            'feedback' => 'nullable|string',
        ]);

        Submission::create($request->all());
        return redirect()->route('submissions.index')->with('success', 'Submission created successfully.');
    }

    public function show(Submission $submission)
    {
        return view('submissions.show', compact('submission'));
    }

    public function edit(Submission $submission)
    {
        $assignments = Assignment::all();
        $projects = Project::all();
        $students = Student::all();
        return view('submissions.edit', compact('submission', 'assignments', 'projects', 'students'));
    }

    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'assignment_id' => 'nullable|exists:assignments,id',
            'project_id' => 'nullable|exists:projects,id',
            'submitted_at' => 'required|date',
            'file_path' => 'required|string',
            'grade' => 'nullable|integer|min:0|max:100',
            'feedback' => 'nullable|string',
        ]);

        $submission->update($request->all());
        return redirect()->route('submissions.index')->with('success', 'Submission updated successfully.');
    }

    public function destroy(Submission $submission)
    {
        $submission->delete();
        return redirect()->route('submissions.index')->with('success', 'Submission deleted successfully.');
    }
}
