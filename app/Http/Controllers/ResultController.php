<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::with('student', 'course')->get();
        return view('results.index', compact('results'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('results.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'grade' => 'required|integer|min:0|max:100',
            'remarks' => 'nullable|string',
        ]);

        Result::create($request->all());
        return redirect()->route('results.index')->with('success', 'Result created successfully.');
    }

    public function show(Result $result)
    {
        return view('results.show', compact('result'));
    }

    public function edit(Result $result)
    {
        $students = Student::all();
        $courses = Course::all();
        return view('results.edit', compact('result', 'students', 'courses'));
    }

    public function update(Request $request, Result $result)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'grade' => 'required|integer|min:0|max:100',
            'remarks' => 'nullable|string',
        ]);

        $result->update($request->all());
        return redirect()->route('results.index')->with('success', 'Result updated successfully.');
    }

    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->route('results.index')->with('success', 'Result deleted successfully.');
    }
}
