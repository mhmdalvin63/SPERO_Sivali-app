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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create(
        //     [
        //     'name' => 'AdminSivali',
        //     'email' => 'Sivaliadminlogin@gmail.com',
        //     'password' => bcrypt('Adminsivalilogin12345678900987654321'),
        //     'level' => 'admin',
        // ],
        [
            'name' => 'AdminElegan',
            'email' => 'eleganfashionstore@gmail.com',
            'password' => bcrypt('AdminElegan12345678'),
            'level' => 'admin',
        ]
    );
    }
}
