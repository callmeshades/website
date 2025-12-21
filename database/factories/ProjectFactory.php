<?php

namespace Database\Factories;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;
use DavidBadura\FakerMarkdownGenerator\FakerProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new FakerProvider($this->faker));
        $image_faker = new ImageFaker(new Picsum());

        return [
            'title' => fake()->jobTitle(),
            'slug' => fake()->slug(),
            'featured_image' => $image_faker->imageUrl(1280, 720),
            'description' => fake()->paragraph(1),
            'body' => $this->faker->markdown()
        ];
    }
}
