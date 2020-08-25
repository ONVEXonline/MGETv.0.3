<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Timeline;
use Faker\Generator as Faker;

$factory->define(Timeline::class, function (Faker $faker) {
    return [
        //
        'project_id' => rand(1, 25),
        'comment' => $faker->realText(1000),
        'rating' => rand(-10, 100)
    ];
});
