<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LikeSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ForumSeeder;
use Database\Seeders\CategorySeeder;

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
            CategorySeeder::class,
            UserSeeder::class,
            ForumSeeder::class,
            LikeSeeder::class,
            PostSeeder::class,
        ]);
    }
}
