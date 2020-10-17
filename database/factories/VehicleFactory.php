<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'registration_number'=> $faker->uuid,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'mark' => $faker->lastName,
        'model' => $faker->firstName,
        'category' => $faker->randomElement($array = array ('Citadine','Berline', 'Luxe')),
        'image_url' => $faker->imageUrl,
        'fuel' => $faker->randomElement($array = array ('Diesel','Essence')),
        'price' => $faker->numberBetween($min = 100, $max = 3000),
        'gearbox' => $faker->randomElement($array = array ('BVA','BVM')),
    ];
});
