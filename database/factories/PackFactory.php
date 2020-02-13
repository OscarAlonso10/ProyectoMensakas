<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pack;
use Faker\Generator as Faker;

$factory->define(Pack::class, function (Faker $faker) {
    return [
    		'name' => $faker->name,
        	'description' => $faker->text($maxNbChars = 45),
            'state' => 1,
            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'fk_business_id'=> rand(1,50),
            
    ];
});
