<?php

namespace Database\Seeders;

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
        // Institute Admin
        User::factory()->create([
            'name' => 'Institute Admin',
            'email' => 'admin@rrinstitute.in',
            'role' => 'institute',
            'password' => bcrypt('password'),
        ]);

        // Test Student
        User::factory()->create([
            'name' => 'Test Student',
            'email' => 'student@example.com',
            'role' => 'student',
            'password' => bcrypt('password'),
        ]);
    }
}
