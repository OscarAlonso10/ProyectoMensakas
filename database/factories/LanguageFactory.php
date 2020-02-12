<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Language;
use Faker\Generator as Faker;

$factory->define(Language::class, function (Faker $faker) {
    return [
        $table->bigIncrements('idlanguage');
            $table->string('nombre', 45);
            $table->string('code', 3)->nullable();
    ];
});
