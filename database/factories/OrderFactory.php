<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
    		'name' => $faker->name,
    		'status' => $faker->text($maxNbChars = 45),
    		'json'=>$faker->text,
    		'fk_deliverer_id'=> rand(1,50),
    		
          
    ];
});
