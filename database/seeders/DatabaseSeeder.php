<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectTag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        ProjectTag::factory(10)->create();

        $tags = ProjectTag::all();

        Project::factory(20)->create()->each(function ($project) use ($tags) {
            $project->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
