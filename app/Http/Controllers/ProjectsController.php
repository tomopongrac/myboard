<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Show all projects.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Persist a new project.
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->projects()->create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
