<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 0, $max = 100),
        'content' =>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'rating' =>$faker->numberBetween($min = 0, $max = 5),
    ];
});
