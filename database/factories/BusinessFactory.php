<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Business;
use Faker\Generator as Faker;

$factory->define(Business::class, function (Faker $faker) {
    return [
    	'name' => $faker->text($maxNbChars = 45),
    	'location' => $faker->text($maxNbChars = 45),
    	'adress' => $faker->text($maxNbChars = 45),
    	'email' => $faker->text($maxNbChars = 45),
    	'number'=> $faker->numberBetween($min = 600000000, $max = 699999999),
    	'zipcode'=> $faker->numberBetween($min = 10000, $max = 99999)
        	
    ];
});
