<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\user;

$factory->define(Model::class, function (Faker $faker) {
    $user = user::all();
    return [
      'file_path' => $faker->fileExtension()
    ];
});
