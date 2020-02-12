<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product_Category;
use Faker\Generator as Faker;

$factory->define(Product_Category::class, function (Faker $faker) {
    return [
         $table->bigIncrements('idProduct_Category');
            $table->string('name', 45);
            $table->unsignedBigInteger('fk_product_id');
            $table->foreign('fk_product_id')->references('idProduct')->on('Product')->onDelete('cascade');
            $table->unsignedBigInteger('fk_language_id');
            $table->foreign('fk_language_id')->references('idlanguage')->on('Language')->onDelete('cascade');
    ];
});
