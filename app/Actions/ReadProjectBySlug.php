<?php

namespace App\Actions;

use Carbon\Carbon;
use File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class ReadProjectBySlug
{
    public function __construct(private string $slug)
    {
        //
    }

    /**
     * @throws FileNotFoundException
     */
    public function execute()
    {
        /**
         * Get the Markdown file for the project by slug
         */
        $file = File::get(resource_path("projects/{$this->slug}.md"));

        /**
         * Parse the front matter and Markdown
         */
        $object = YamlFrontMatter::parse($file);

        /**
         * Return the project
         */
        return [
            'matter' => [
                ...$object->matter(),
                'date' => new Carbon($object->matter('date')),
            ],
            'body' => $object->body(),
        ];
    }
}
