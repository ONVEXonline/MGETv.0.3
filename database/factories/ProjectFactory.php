<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Project::class, function (Faker $faker) {
    $name = $faker->realText(100);

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->realText(3000),
        'active' => $faker->boolean(50)
    ];
});
