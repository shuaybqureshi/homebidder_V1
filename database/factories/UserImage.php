<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;
$factory->define(Image::class, function (Faker $faker) {
    static $order = 1;   
     // User Type
     
     $number=$order;

    if  ($order<=25){
                    $imageable_type='App\User';
                    $imageArray = array("avatar-1.jpg", "avatar-2.jpg", "avatar-3.png","avatar-4.png");
                    $randIndex = array_rand($imageArray);
$image= $imageArray[$randIndex];
    }
    else if ($order>=25 && $order<=50 ){
                    $imageable_type='App\Property';
                    $number-=25;
                    
                    $image="df-home-image-$number.jpg";
                    // $imageArray = array("df-home-image-1.jpg", "df-home-image-2.jpg", "df-home-image-3.jpg","df-home-image-4.jpg");
   
    } else if ($order>=50 && $order<=75 ){
                    $imageable_type='App\Property';
                    $number-=50;
                    $imageArray = array("bed-home-image-1.jpg", "bed-home-image-2.jpg", "bed-home-image-3.jpg","bed-home-image-4.jpg","bed-home-image-5.jpg");
                    $randIndex = array_rand($imageArray);
                    $image= $imageArray[$randIndex];
    } else if ($order>=75 && $order<=100 ){
                    $imageable_type='App\Property';
                    $number-=75;
                    $imageArray = array("int-home-image-1.jpg", "int-home-image-2.jpg", "int-home-image-3.jpg","int-home-image-4.jpg","int-home-image-5.jpg", "int-home-image-6.jpg", "int-home-image-7.jpg","int-home-image-8.jpg","int-home-image-9.jpg","int-home-image-10.jpg");
                    $randIndex = array_rand($imageArray);
                    $image= $imageArray[$randIndex];
                } 
                else if ($order>=100 && $order<=125 ){
                    $imageable_type='App\Property';
                    $number-=100;
                    $imageArray = array("kit-home-image-1.jpg", "kit-home-image-2.jpg", "kit-home-image-3.jpg","kit-home-image-4.jpg","kit-home-image-5.jpg");
                    $randIndex = array_rand($imageArray);
                    $image= $imageArray[$randIndex];
                } 
else {
                    $imageable_type='App\Property';
                    $number-=40;
                    $imageArray = array("kit-home-image-1.jpg", "kit-home-image-2.jpg", "kit-home-image-3.jpg","kit-home-image-4.jpg");
                    
}

    $order++;
    return [
        'imageable_id' =>  $number ,
        'imageable_type' =>   $imageable_type,
        'url' => $image,
    ];
});
