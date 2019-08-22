<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;
$factory->define(Image::class, function (Faker $faker) {
    static $order = 1;   
     // User Type
     
     $number=$order;

    if  ($order<=10){
                    $imageable_type='App\User';
                    $imageArray = array("avatar-1.jpg", "avatar-2.jpg", "avatar-3.png","avatar-4.png");
    }
    else if ($order>=10 && $order<=20 ){
                    $imageable_type='App\Property';
                    $number-=10;
                    $imageArray = array("df-home-image-1.jpg", "df-home-image-2.jpg", "df-home-image-3.jpg","df-home-image-4.jpg");
                    
    } else if ($order>=20 && $order<=30 ){
                    $imageable_type='App\Property';
                    $number-=20;
                    $imageArray = array("bed-home-image-1.jpg", "bed-home-image-2.jpg", "bed-home-image-3.jpg","bed-home-image-4.jpg");
                    
    } else if ($order>=30 && $order<=40 ){
                    $imageable_type='App\Property';
                    $number-=30;
                    $imageArray = array("int-home-image-1.jpg", "int-home-image-2.jpg", "int-home-image-3.jpg","int-home-image-4.jpg");
} else {
                    $imageable_type='App\Property';
                    $number-=40;
                    $imageArray = array("kit-home-image-1.jpg", "kit-home-image-2.jpg", "kit-home-image-3.jpg","kit-home-image-4.jpg");
                    
}
$randIndex = array_rand($imageArray);
$image= $imageArray[$randIndex];
    $order++;
    return [
        'imageable_id' =>  $number ,
        'imageable_type' =>   $imageable_type,
        'url' => $image,
    ];
});
