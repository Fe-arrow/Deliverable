<?php

use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
            'id'=>1,
            'group_id'=>1,
            'user_id'=>1,
            'place'=>Str::random(10),
            'date'=>new DateTime(),
            'content'=>Str::random(10),
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
    }
}
