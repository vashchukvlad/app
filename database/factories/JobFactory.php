<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => fake()->numberBetween(5000, 500000) . ' USD'
        ];
    }

    //only for testing
    // public function configure()
    // {
    //     return $this->afterCreating(function (Job $job) {
    //         $tags = Tag::factory()->count(2)->create();
    //         $job->tags()->attach($tags->pluck('id'));
    //     });
    // }
}
