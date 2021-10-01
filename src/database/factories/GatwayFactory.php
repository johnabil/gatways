<?php

use Faker\Generator as Faker;

$factory->define(\Gatways\Models\Gatway::class, function (Faker $faker) {
    return [
        's_no' => \Illuminate\Support\Str::random(30),
        'name' => $faker->name,
        'IPv4' => $faker->ipv4,
    ];
});
