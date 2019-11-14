<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $categorias = ['collares', 'aros', 'pulseras', 'otros'];
    return [
        'name' => $faker->randomElement($categorias)
        //
    ];
});
