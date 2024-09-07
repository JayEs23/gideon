<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch students with pagination, e.g., 10 students per page
        $students = Student::paginate(4);
        return view('students.index', compact('students'));
    }


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students',
            'password' => 'required|string|min:8',
        ]);

        $code = $this->generateUniqueCode();

        Student::create([
            'name' => $request->name,
            'code' => $code,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    private function generateUniqueCode()
    {
        do {
            $code = 'ACETECH-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
        } while (Student::where('code', $code)->exists());

        return $code;
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email,' . $student->id,
            'password' => 'nullable|string|min:8',
        ]);

        // Prepare data for update
        $data = $request->only(['name', 'email']); // Get only name and email fields

        // Check if password is provided
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->input('password'));
        }

        // Update the student record
        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function show(Student $student)
    {
        $student->load('courses');
        $courses = Course::all();
        return view('students.show', compact('student', 'courses'));
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

    public function assignCourse(Request $request, Student $student)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $student->courses()->attach($request->course_id, [
            'enrollment_date' => now(),
            'status' => 'enrolled'
        ]);

        return redirect()->route('students.show', $student)->with('success', 'Course assigned successfully.');
    }
}
