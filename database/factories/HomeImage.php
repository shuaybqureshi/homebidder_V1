<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {

    return [
        'imageable_id' =>  1,
        'imageable_type' =>  'App\Property',
        'url' => '$homeImage',
    ];
});
