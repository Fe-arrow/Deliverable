<?php

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
            GroupSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            AnnouncementSeeder::class,
            Purchase_goodSeeder::class,
            ItemSeeder::class
            ]);
    }
}
