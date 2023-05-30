<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'group_id'=>1,
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'email_verified_at'=> new DateTime(),
            'password'=>Hash::make('password'),
            'remember_token'=>Str::random(10),
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
    }
}
