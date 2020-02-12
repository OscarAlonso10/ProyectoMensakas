<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Consumer;
use Faker\Generator as Faker;

$factory->define(Consumer::class, function (Faker $faker) {
    return [
         	$table->bigIncrements('idConsumer');
            $table->string('first_name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('location', 45)->nullable();
            $table->integer('phone')->length(9);
    ];
});
