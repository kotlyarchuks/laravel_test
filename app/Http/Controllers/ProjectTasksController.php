<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $validated = request()->validate([
            'description' => 'required|min:3|max:100',
        ]);
        $project->addTask($validated);

        return back();
    }
}
