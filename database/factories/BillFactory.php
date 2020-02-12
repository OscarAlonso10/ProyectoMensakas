<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bill;
use Faker\Generator as Faker;

$factory->define(Bill::class, function (Faker $faker) {
    return [
        'token' => $faker->text($maxNbChars = 255),
        'fk_order_id'=> rand(1,50)
            
    ];
});
