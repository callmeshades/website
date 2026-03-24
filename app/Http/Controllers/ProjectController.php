<?php

namespace App\Http\Controllers;

use App\Actions\ReadProjectBySlug;

class ProjectController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        /**
         * Cache the project for 15 minutes
         */
        $project = \Cache::remember("project_{$slug}", 15, function () use ($slug) {
            /**
             * Find a project by slug and load Markdown and front matter
             */
            return (new ReadProjectBySlug($slug))->execute();
        });

        return view('projects.show', compact('project'));
    }
}
