<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' =>$faker->numberBetween($min = 0, $max = 100),
        'post_id' =>$faker->numberBetween($min = 0, $max = 100),
        'content' =>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'parent_comment_id' =>$faker->numberBetween($min = 0, $max = 100),
        'rating' =>$faker->numberBetween($min = 0, $max = 5),
        
    ];
});
