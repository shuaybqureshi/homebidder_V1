<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;
$factory->define(Image::class, function (Faker $faker) {
    static $order = 1;   

     // User Type
     $userImageArray = array("avatar-1.jpg", "avatar-2.jpg", "avatar-3.png","avatar-2.png");
     $randIndex = array_rand($userImageArray);
     $userImage= $userImageArray[$randIndex];

    return [
        'imageable_id' =>  $order++,
        'imageable_type' =>   'App\User',
        'url' => $userImage,
    ];
});
