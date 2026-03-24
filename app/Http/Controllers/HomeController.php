<?php

namespace App\Http\Controllers;

use App\Actions\ReadAllProjects;
use Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /**
         * Cache all projects for 15 minutes
         */
        $projects = Cache::remember('all_projects', 15, function () {
            /**
             * Get all projects
             */
            return (new ReadAllProjects)->execute();
        });

        return view('home', [
            'projects' => $projects,
            'projects_count' => $projects->count(),
        ]);
    }
}
