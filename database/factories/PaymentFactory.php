<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        	$table->bigIncrements('idPayment');
            $table->string('status', 45);
            
            $table->unsignedBigInteger('fk_order_id');
            $table->foreign('fk_order_id')->references('idOrder')->on('Order')->onDelete('cascade');

            $table->unsignedBigInteger('fk_consumer_id');
            $table->foreign('fk_consumer_id')->references('idConsumer')->on('Consumer')->onDelete('cascade');
    ];
});
