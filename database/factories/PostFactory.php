<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(20),
            'body' => fake()->text(200),
        ];
    }

    //only for testing
    // This method is used to create a relationship between the Post and Tag models
    
    // public function configure()
    // {
    //     return $this->afterCreating(function (Post $post) {
    //         $tags = Tag::factory()->count(2)->create();
    //         $post->tags()->attach($tags->pluck('id'));
    //     });
    // }
}
