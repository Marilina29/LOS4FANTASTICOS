<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'name'=>$faker->unique()->name,
      'price' => $faker->numberBetween($min = 200, $max = 300),
      'units' => $faker->numberBetween($min = 1, $max = 10),
      

        //
    ];
});
