<?php

namespace App\Http\Controllers;

use App\Mail\ProjectCreated;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = auth()->user()->projects;

        return view('projects/index', compact('projects'));
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);

        return view('projects/show', compact('project'));
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);

        return view('projects/edit', compact('project'));
    }

    public function update(Project $project)
    {
        $this->authorize('update', $project);

        $validated = $this->validateProject();
        $project->update($validated);

        return redirect('/projects');
    }

    public function create()
    {
        return view('projects/create');
    }

    public function store()
    {
        $validated = $this->validateProject();

        $validated['user_id'] = auth()->id();

        $project = Project::create($validated);

        Mail::to('kotlyarchukd@gmail.com')->send(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $this->authorize('update', $project);
        $project->delete();

        return redirect('/projects');
    }

    protected function validateProject()
    {
        return request()->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3',
        ]);
    }
}
