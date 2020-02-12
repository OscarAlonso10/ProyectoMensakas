<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        $table->bigIncrements('idOrder');
            $table->string('name', 45);
            $table->string('status', 45)->nullable();
            $table->json('json');

            $table->unsignedBigInteger('fk_deliverer_id');
            $table->foreign('fk_deliverer_id')->references('idDeliverer')->on('Deliverer')->onDelete('cascade');
    ];
});
