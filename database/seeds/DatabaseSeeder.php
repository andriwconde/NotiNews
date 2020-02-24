<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // DB::table("users")->insert(
      //   ['first_name' => 'andres',
      //   'last_name' => 'conde',
      //   'name' => 'andres conde',
      //   'avatar' => 'andres conde',
      //   'password' => 'andres conde',
      //   'email' => 'andriwconde@gmail.com',
      //   'type' => 'lector',
      //   ]);

          DB::table("categories")->insert(
            ['name' => '']
          );
        //$this->call(UserSeeder::class);
         factory(App\Article::class, 50)->create();
    }
}
