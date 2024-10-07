<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      

    // Create an admin user with custom credentials
    User::factory()->create([
        'name' => 'admin',
        'email' => 'municipality.elwak@gmail.com',
        'password' => bcrypt('elwak@admin'), // Set your desired admin password here
        // Add any other fields if necessary (e.g., role, is_admin, etc.)
    ]);
    }
}
