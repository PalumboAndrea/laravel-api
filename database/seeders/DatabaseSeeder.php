<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UserDetail;
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
        $this->call([
            UserSeeder::class,
            UserDetailSeeder::class,
            TypeSeeder::class,
            TechnologySeeder::class,
            PostSeeder::class,
            PostTechnologySeeder::class,
        ]);
    }
}
