<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);





        DB::table('job_listing')->insert([
            'title' => 'Programmer',
            'salary' => '50.000$',
        ]);

        DB::table('job_listing')->insert([
            'title' => 'Manager',
            'salary' => '60.000$',
        ]);

        DB::table('job_listing')->insert([
            'title' => 'Teacher',
            'salary' => '1000.000$',
        ]);
    }
}
