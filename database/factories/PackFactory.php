<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pack;
use Faker\Generator as Faker;

$factory->define(Pack::class, function (Faker $faker) {
    return [
        $table->bigIncrements('idPack');
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->boolean('state')->nullable();
            $table->decimal('price', 5, 2)->nullable();
            
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('Business')->onDelete('cascade');
    ];
});
