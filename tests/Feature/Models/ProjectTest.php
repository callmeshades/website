<?php

use App\Models\Project;
use App\Models\ProjectTag;

it('can attach and have tags', function() {
    $project = Project::factory()->create();
    $tag = ProjectTag::factory()->create();
    $project->tags()->attach($tag);

    expect($project->tags->count())->toBe(1);
});
