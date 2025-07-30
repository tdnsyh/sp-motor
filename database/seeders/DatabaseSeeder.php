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
        $this->call(GejalaSeeder::class);
        $this->call(KerusakanSeeder::class);
        $this->call(RuleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
