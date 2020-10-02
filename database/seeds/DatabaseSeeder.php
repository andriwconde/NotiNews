<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Coment;
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
            ['name' => 'Accion'],
          );
          DB::table("categories")->insert(
            ['name' => 'Horror'],
          );
          DB::table("categories")->insert(
            ['name' => 'Suspenso'],
          );
          DB::table("categories")->insert(
            ['name' => 'Aventura'],
          );
          DB::table("categories")->insert(
            ['name' => 'Comedia'],
          );
          DB::table("categories")->insert(
            ['name' => 'Drama'],
          );
        //$this->call(UserSeeder::class);
        factory(App\User::class, 10)->create();
        factory(App\Article::class, 50)->create();
        factory(App\Coment::class, 50)->create();

    }
}
