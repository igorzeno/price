<?php

namespace Database\Seeders;

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
            PriceSeeder::class,
//            UserSeeder::class,
//            ChannelSeeder::class,
//            PlaylistSeeder::class,
//            VideoSeeder::class,
//            CategorySeeder::class,
//            CategoryVideoSeeder::class,
//            PlaylistVideoSeeder::class,
//            CommentSeeder::class,
        ]);
    }
}
