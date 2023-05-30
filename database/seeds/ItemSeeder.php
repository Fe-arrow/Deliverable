<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('items')->insert([
            'id'=>1,
            'category_id'=>1,
            'user_id'=>1,
            'frequency'=>Str::random(5),
            'name'=>Str::random(5),
            'img_path'=>Str::random(10),
            'quantity'=>rand(1,10),
            'expiry_date'=>rand(1,10),
            'place'=>Str::random(5),
            'price'=>rand(1,1000).'円',
            'memo'=>Str::random(10),
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            'deleted_at'=>null,
            ]);
    }
}
