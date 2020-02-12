<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
         $table->bigIncrements('idProduct');
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->boolean('state');
            $table->decimal('price', 5, 2);
            $table->string('type', 45)->nullable();
            $table->unsignedBigInteger('fk_business_id');
            $table->foreign('fk_business_id')->references('idBusiness')->on('Business')->onDelete('cascade');
            $table->unsignedBigInteger('fk_language_id');
            $table->foreign('fk_language_id')->references('idlanguage')->on('Language')->onDelete('cascade');
    ];
});
