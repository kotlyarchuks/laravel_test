<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Auth::user()->projects->all();

        return view('projects/index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects/show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects/edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function create()
    {
        return view('projects/create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3',
        ]);

        Project::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'user_id' => Auth::id(),
        ]);

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}
