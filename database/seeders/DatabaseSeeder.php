<?php

namespace Database\Seeders;

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
        User::factory(99)->create();

        User::factory()->create([
            'name' => 'Superadmin',
            'username' => 'admin',
            'email' => 'admin@example.com',
        ]);
    }
}
