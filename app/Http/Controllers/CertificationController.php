<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    public function index()
    {
        $certifications = Certification::with('student', 'course')->get();
        return view('certifications.index', compact('certifications'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('certifications.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'issued_at' => 'required|date',
            'certificate_path' => 'required|string',
        ]);

        Certification::create($request->all());
        return redirect()->route('certifications.index')->with('success', 'Certification created successfully.');
    }

    public function show(Certification $certification)
    {
        return view('certifications.show', compact('certification'));
    }

    public function edit(Certification $certification)
    {
        $students = Student::all();
        $courses = Course::all();
        return view('certifications.edit', compact('certification', 'students', 'courses'));
    }

    public function update(Request $request, Certification $certification)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'issued_at' => 'required|date',
            'certificate_path' => 'required|string',
        ]);

        $certification->update($request->all());
        return redirect()->route('certifications.index')->with('success', 'Certification updated successfully.');
    }

    public function destroy(Certification $certification)
    {
        $certification->delete();
        return redirect()->route('certifications.index')->with('success', 'Certification deleted successfully.');
    }
}
