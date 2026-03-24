<?php

namespace App\Actions;

use File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class ReadAllProjects
{
    public function execute()
    {
        /**
         * Read all files in the projects directory
         */
        $files = File::allFiles(resource_path('projects'));

        /**
         * Create a collection of the projects
         */
        $projects = collect();

        /**
         * Create and parse the front matter and Markdown for each project
         */
        foreach ($files as $file) {
            $object = YamlFrontMatter::parse($file->getContents());
            $projects->push([
                'matter' => $object->matter(),
                'body' => $object->body(),
            ]);
        }

        return $projects;
    }
}
