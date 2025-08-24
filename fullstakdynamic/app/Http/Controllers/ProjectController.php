<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Get all projects
        $projects = Project::all();
        
        // Pass data to view
        return view('projects.index', ['projects' => $projects]);
    }

    public function show($id)
    {
        // Get specific project
        $project = Project::findOrFail($id);
        
        // Pass data to view
        return view('projects.show', ['project' => $project]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048', // 2MB max
        ]);

        // Create new project
        $project = new Project();
        $project->title = $validated['title'];
        $project->description = $validated['description'];
        
        // Handle image upload if present
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $project->image = $path;
        }
        
        $project->save();

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully!');
    }
}
