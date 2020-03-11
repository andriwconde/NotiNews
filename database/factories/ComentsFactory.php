<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coment;
use Faker\Generator as Faker;
use App\Article;
use App\user;
$factory->define(Coment::class, function (Faker $faker) {
  $user = user::all();
  $article = Article::all();
    return [
      'user_id' => $user->shuffle()->first()->id,
      'article_id' => $article->shuffle()->first()->id,
      'rating' => $faker->numberBetween(1,5),
      'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
