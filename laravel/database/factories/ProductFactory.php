<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
  $imagenes = ['prod_1-flor.jpg', 'prod_2-verdis.jpg', 'prod_3-blackSil.jpg', 'prod_4-primavera.jpg', 'prod_5-azulera.jpg', 'prod_6-fusion.jpg' ];
    return [
        'name' => $faker->name,
        'code' => $faker->unique()->word,
        'description' => $faker->word,
        'color' => $faker->colorName,
        'price' => $faker->numberBetween($min = 200, $max = 300),
        'img' => $faker->randomElement($imagenes)

    ];
});
