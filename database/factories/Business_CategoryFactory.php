<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Business_Category;
use Faker\Generator as Faker;

$factory->define(Business_Category::class, function (Faker $faker) {
    return [
    	'name' => $faker->text($maxNbChars = 45),
    	'fk_language_id'=> rand(1,50),
    	'fk_business_id'=> rand(1,50),
           
    ];
});
