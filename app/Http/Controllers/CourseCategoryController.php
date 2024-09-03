<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $categories = CourseCategory::all();
        return view('course_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('course_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:course_categories',
            'description' => 'nullable',
        ]);

        CourseCategory::create($request->all());
        return redirect()->route('course_categories.index')->with('success', 'Category created successfully.');
    }

    public function show(CourseCategory $courseCategory)
    {
        return view('course_categories.show', compact('courseCategory'));
    }

    public function edit(CourseCategory $courseCategory)
    {
        return view('course_categories.edit', compact('courseCategory'));
    }

    public function update(Request $request, CourseCategory $courseCategory)
    {
        $request->validate([
            'name' => 'required|unique:course_categories,name,' . $courseCategory->id,
            'description' => 'nullable',
        ]);

        $courseCategory->update($request->all());
        return redirect()->route('course_categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(CourseCategory $courseCategory)
    {
        $courseCategory->delete();
        return redirect()->route('course_categories.index')->with('success', 'Category deleted successfully.');
    }
}
