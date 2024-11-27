<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
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
        User::factory(10)->create();
        Note::factory(50)->create();
        User::factory()->create([
            'email' => 'a@admin.com',
            'password' => bcrypt('password')
        ]);
    }
}
