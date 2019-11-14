<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Style;
use Faker\Generator as Faker;

$factory->define(Style::class, function (Faker $faker) {
    return [
      'name'=>$faker->unique()->name,
      'price' => $faker->numberBetween($min = 200, $max = 300),
      'units' => $faker->numberBetween($min = 1, $max = 6),
      'category_id' => $faker->numberBetween($min = 1, $max = 4),


        //
    ];
});
