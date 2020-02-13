<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Consumer;
use Faker\Generator as Faker;

$factory->define(Consumer::class, function (Faker $faker) {
    return [
         	'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->safeEmail,
           	'location' => $faker->city,
           	'phone'=> $faker->numberBetween($min = 600000000, $max = 699999999),
         
    ];
});
