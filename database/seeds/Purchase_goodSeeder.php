<?php

use Illuminate\Database\Seeder;

class Purchase_goodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('purchase_goods')->insert([
            'id'=>1,
            'user_id'=>1,
            'item_name'=>Str::random(10),
            'amount'=>rand(1,10),
            'purchase_date'=>new DateTime(),
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            'deleted_at'=>null,
            ]);
    }
}
