<?php

use Faker\Generator as Faker;

$factory->define(\Gatways\Models\Device::class, function (Faker $faker) {
    return [
        'uid' => $faker->creditCardNumber,
        'vendor' => $faker->lastName,
        'status' => $faker->randomElement(['offline', 'online']),
    ];
});
