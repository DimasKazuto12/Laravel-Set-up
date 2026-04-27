<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Dimas Aditiya Pratama',
            'role' => 'admin',
            'email' => 'dimassanjaya@gmail.com',
            'password' => Hash::make('bijikok1')
        ]);

        User::factory()->create([
            'name' => 'Dimas Aditiya Pratama',
            'role' => 'user',
            'email' => 'dimassanjaya1@gmail.com',
            'password' => Hash::make('bijikok2')
        ]);


    }
}
