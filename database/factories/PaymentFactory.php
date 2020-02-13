<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        	'status' => $faker->text($maxNbChars = 45),
           	'fk_order_id'=> rand(1,50),
            'fk_consumer_id'=> rand(1,50),
            
    ];
});
