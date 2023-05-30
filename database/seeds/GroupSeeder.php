<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'id'=>1,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            'deleted_at'=>null,
            ]);
    }
}
