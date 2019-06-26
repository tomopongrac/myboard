<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
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
