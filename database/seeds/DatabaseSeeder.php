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
      DB::table("users")->insert(
        ['first_name' => 'andres',
        'last_name' => 'conde',
        'name' => 'andres conde',
        'avatar' => 'andres conde',
        'password' => 'andres conde',
        'email' => 'condeaibdghth4@gmail.com',
        'type' => 'lector',
        ]);

          DB::table("categories")->insert(
            ['name' => 'ultimas noticias']
          );
        //$this->call(UserSeeder::class);
         factory(App\Article::class, 50)->create();
    }
}
