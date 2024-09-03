<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->get();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = CourseCategory::all();
        return view('courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:courses',
            'description' => 'nullable',
            'category_id' => 'required|exists:course_categories,id',
            'created_by' => 'required|exists:users,id', // Assuming 'users' table for instructors
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'status' => 'required|in:active,archived',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $categories = CourseCategory::all();
        return view('courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|unique:courses,title,' . $course->id,
            'description' => 'nullable',
            'category_id' => 'required|exists:course_categories,id',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'status' => 'required|in:active,archived',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
