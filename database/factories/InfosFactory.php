<?php

use Faker\Generator as Faker;

$factory->define(App\Info::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'car' => $faker->company,
        'color' => $faker->safeColorName,
        
    ];
});
