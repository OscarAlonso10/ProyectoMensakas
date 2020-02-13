<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deliverer;
use Faker\Generator as Faker;

$factory->define(Deliverer::class, function (Faker $faker) {
    return [
        	'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'phone'=> $faker->numberBetween($min = 600000000, $max = 699999999),
            'email' => $faker->safeEmail,
    ];
});
