<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
            'name' => $faker->text($maxNbChars = 45),
            'description' => $faker->text($maxNbChars = 45),
            'state' => 1,
            'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999),
            'type' => $faker->text($maxNbChars = 45),
            'fk_business_id'=> rand(1,50),
            'fk_language_id'=> rand(1,50),
           
    ];
});
