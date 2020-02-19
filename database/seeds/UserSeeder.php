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
      DB::table("users")->insert(
        ['first_name' => 'andres',
        'last_name' => 'conde',
        'name' => 'andres conde',
        'avatar' => 'andres conde',
        'password' => 'andres conde',
        'email' => 'condeandres34@gmail.com',
        'type' => 'lector',]);
    }
}
