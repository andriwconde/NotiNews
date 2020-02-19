<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use App\category;
use App\user;



$factory->define(Article::class, function (Faker $faker) {
    $categories = category::all();
    $user = user::all();
    return [
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'excerpt' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'category_id' => $categories->shuffle()->first()->id,
        'user_id' => $user->shuffle()->first()->id
    ];
});
