<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'nisa',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'email_verified_at' => now(),
            'created_at' => now()
        ]);
    }
}