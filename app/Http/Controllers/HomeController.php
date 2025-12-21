<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /**
         * Get all projects
         */
        $projects = Project::get();

        $projects_count = Project::count();

        return view('home', compact('projects', 'projects_count'));
    }
}
