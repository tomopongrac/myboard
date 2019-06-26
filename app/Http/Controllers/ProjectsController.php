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
        Project::create([
            'title' => request('title'),
            'description' => request('description'),
        ]);

        return redirect('/projects');
    }
}
