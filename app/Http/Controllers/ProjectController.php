<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Course;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('course')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('projects.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'course_id' => 'required|exists:courses,id',
            'due_date' => 'required|date',
        ]);

        Project::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $courses = Course::all();
        return view('projects.edit', compact('project', 'courses'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'course_id' => 'required|exists:courses,id',
            'due_date' => 'required|date',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
