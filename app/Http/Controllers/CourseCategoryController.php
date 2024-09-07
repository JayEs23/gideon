<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    // CourseCategoryController.php

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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        CourseCategory::create($request->all());

        return redirect()->route('course-categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(CourseCategory $category)
    {
        return view('course_categories.edit', compact('category'));
    }

    public function update(Request $request, CourseCategory $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());

        return redirect()->route('course-categories.index')->with('success', 'Category updated successfully.');
    }

    public function show(CourseCategory $category)
    {
        return view('course_categories.show', compact('category'));
    }

    public function destroy(CourseCategory $category)
    {
        $category->delete();
        return redirect()->route('course-categories.index')->with('success', 'Category deleted successfully.');
    }
}
