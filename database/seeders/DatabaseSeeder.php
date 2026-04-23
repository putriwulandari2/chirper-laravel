<?php

namespace Database\Seeders;

use App\Models\Chirp;
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
        // Create a specific user for the example
        $user = User::create([
            'name' => 'Eloquent Expert',
            'email' => 'expert@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        // Create a specific chirp
        Chirp::create([
            'user_id' => $user->id,
            'message' => 'Eloquent makes database work a breeze!',
        ]);

        // Create more users and chirps for additional content
        User::factory(5)->create();
        Chirp::factory(10)->create();
    }
}
