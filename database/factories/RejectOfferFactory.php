<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RejectOffer;
use Faker\Generator as Faker;

$factory->define(RejectOffer::class, function (Faker $faker) {
    $property_id=rand(1, 10);
    $user_id=rand(1, 10);
    $value=rand(1000000, 10000000);
    $deposit=rand(10000, 100000);
  // User Type
  $statusTypeArray = array("expired", "rejected", "countered");
  $randIndex = array_rand($statusTypeArray);
  $status= $statusTypeArray[$randIndex];
    return [
        'user_id' => $user_id,
        'property_id' => $property_id,
        'value' => $value,
        'deposit' => $deposit,
        'conditions' =>$faker->text(400),
        'status' => $status
    ];
});
