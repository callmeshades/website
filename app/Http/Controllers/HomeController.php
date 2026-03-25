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
            $projects = (new ReadAllProjects)->execute();

            /**
             * Sort the projects by date. Show the most recent first
             */
            return $projects->sortBy('matter.date', descending: true);
        });

        return view('home', [
            'projects' => $projects,
            'projects_count' => $projects->count(),
        ]);
    }
}
