<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product_Category;
use Faker\Generator as Faker;

$factory->define(Product_Category::class, function (Faker $faker) {
    return [
            'name' => $faker->text($maxNbChars = 45),
            'fk_product_id'=> rand(1,50),
            'fk_language_id'=> rand(1,50),
            
    ];
});
