<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Business;
use Faker\Generator as Faker;

$factory->define(Business::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
    	'location' => $faker->city,
    	'adress' => $faker->address,
    	'email' => $faker->safeEmail,
    	'number'=> $faker->numberBetween($min = 600000000, $max = 699999999),
    	'zipcode'=> $faker->numberBetween($min = 10000, $max = 99999)
        	
    ];
});
