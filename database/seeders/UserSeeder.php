<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@sp-motor.com'],
            [
                'name' => 'Admin SP Motor',
                'password' => Hash::make('password'), // Ganti dengan password kuat
                'role' => 'admin',
            ]
        );

        // User
        User::updateOrCreate(
            ['email' => 'user@sp-motor.com'],
            [
                'name' => 'User SP Motor',
                'password' => Hash::make('password'), // Ganti juga jika perlu
                'role' => 'user',
            ]
        );
    }
}
