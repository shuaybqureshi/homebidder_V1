<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    // User Type
    $userTypeArray = array("realtor", "broker", "seller");
    $randIndex = array_rand($userTypeArray);
    $userType= $userTypeArray[$randIndex];
   
    // Phone Number
    $digits = 3;
    $middle= rand(pow(10, $digits-1), pow(10, $digits)-1);
    $digits = 4;
    $end= rand(pow(10, $digits-1), pow(10, $digits)-1);
    $phoneNumber ='647' . '-' .$middle . '-' . $end;

    return [
        'first_name' =>  $faker->firstName,
        'last_name' =>   $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'user_type' =>$userType,
        'company_name' => $faker->company,
        'phone' => $phoneNumber,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
