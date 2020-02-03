<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'tipe' => $faker->name,
        'merek' => $faker->name,
        'plate' => $faker-> numerify('DK #### JS'),
        'tahun' => $faker->year,
        'harga' => $faker->numerify('Rp ###.###'),
        'foto' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
