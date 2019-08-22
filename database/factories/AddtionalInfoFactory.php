<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AddtionalPropertyInfo;
use Faker\Generator as Faker;

$factory->define(AddtionalPropertyInfo::class, function (Faker $faker) {
    static $property_id = 1;   

    return [
        'property_id'=>$property_id++,
        'bed' =>  rand(1, 5),
        'bath' =>  rand(1, 5),
        'year' => rand(1950, 2020),
        'desc' =>   $faker->paragraph($nbSentences = 3, $variableNbSentences = true) ,
        'taxes' => rand(1000, 5020),
    ];
});
