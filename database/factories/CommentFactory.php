<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'project_id' => rand(1, 25),
        'comment' => $faker->realText(1000),
        'rating' => rand(-10, 100)
    ];
});
