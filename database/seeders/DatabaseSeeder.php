<?php

namespace Database\Seeders;

use App\Models\Cerita;
use App\Models\Terpulang;
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
        // User::factory(10)->create();

        User::factory(10)->create();
        Terpulang::factory(10)->create();
        Cerita::factory(10)->create();
    }
}
