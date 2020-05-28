<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'description' => Str::random(10),
        'url' => Str::random(10)
    
    ];
});
