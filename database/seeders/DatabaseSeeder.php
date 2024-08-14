<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        Listing::factory(10)->create([
            'user_id' => $user->id,
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Dev',
        //     'tags' => 'Laravel, PHP, Javascript, Web',
        //     'company' => 'Kuraz Technologies',
        //     'location' => 'Addis Ababa',
        //     'email' => 'email@example.com',
        //     'website' => 'kuraz.net',
        //     'description' => 'Just a simple description of a laravel job, we\'ll see what happens next'
        // ]);
        //
        // Listing::create([
        //     'title' => 'Javascript Junior Dev',
        //     'tags' => 'Javascript, Web, Node.js, Express.js',
        //     'company' => 'Kuraz Technologies',
        //     'location' => 'Addis Ababa',
        //     'email' => 'email@example.com',
        //     'website' => 'kuraz.net',
        //     'description' => 'Just a simple description of a laravel job, we\'ll see what happens next'
        // ]);
    }
}
