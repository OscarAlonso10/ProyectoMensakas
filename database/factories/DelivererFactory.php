<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deliverer;
use Faker\Generator as Faker;

$factory->define(Deliverer::class, function (Faker $faker) {
    return [
        	$table->bigIncrements('idDeliverer');
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->integer('phone')->nullable();
            $table->string('email', 45)->nullable();
    ];
});
