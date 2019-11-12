<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $imagenes = ['prod_1-flor.jpg', 'prod_2-verdis.jpg', 'prod_3-blackSil.jpg', 'prod_4-primavera.jpg', 'prod_5-azulera.jpg', 'prod_6-fusion.jpg' ];
    return [
        'code' => $faker->unique()->word,
        'description' => $faker->paragraph(4),
        'color' => $faker->colorName,
        'img' => $faker->randonElement($imagenes),
        'price' => $faker->numberBetween(200, 300),
        'style' => $faker->numberBetween(0, 5)      

    ];
});
