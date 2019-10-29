<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //Crear Datos falsos para productos
        'name'  	  => $faker->sentence,
        'description' => $faker->sentence,
    ];
});
