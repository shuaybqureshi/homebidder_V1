<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
$string = 'ABCDEFGHIJKLMNOPHQZE';
$stringLength = strlen($string);
$randomIndex = mt_rand(0, $stringLength - 1);
$mls=$string[$randomIndex] .rand(100000, 1000000);
$user_id=rand(1, 10);
    return [
        'price' =>  rand(100000, 1000000),
        'status' =>  "active",
        'user_id' =>  $user_id,
        'mls' =>  $mls,
        'address' =>  $faker->streetAddress,
        'city' =>  $faker->city,
        'postal' =>  $faker->postcode ,
    ];
});
