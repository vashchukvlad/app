<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Job::factory(30)->create();

        Post::factory(30)->create();

        Employer::factory(10)->create();

        // Uncomment the following lines to create tags and associate them with jobs and posts
        // in case you don't want to use the factory's afterCreating method in JobFactory.php and PostFactory.php.
        // Tag::factory()
        //     ->count(10)
        //     ->create()
        //     ->each(function ($tag) {
        //         $jobs = Job::inRandomOrder()->take(3)->pluck('id');
        //         $posts = Job::inRandomOrder()->take(3)->pluck('id');
        //         $tag->posts()->attach($posts);
        //         $tag->jobs()->attach($jobs);
        //     });
    }
}
