<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Image;




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/editUserInfo', 'UserController@edit')->name('editUserInfo');
Route::get('/userinfo', 'UserController@read')->name('userinfo');
Route::post('/updateUserInfo', 'UserController@update')->name('updateUserInfo');

Route::get('/additonalInfo', 'RealtorInfoController@index');
Route::post('/uploadImage', 'UserController@uploadImage')->name('uploadImage');
Route::post('/updateImage', 'UserController@updateImage')->name('updateImage');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    
// {{ phone($user['phone'], 'US'); }}
});

Route::get('/create', function () {
    $user=user::find(1);
    $user->image()->create(['url'=>'example.jpg']);
});

Route::get('/update', function () {
    $user=user::find(1);
   echo $image= $user->image()->whereId(1)->first();
    echo $image->url="Stuff.jph";
    $image->save();
});
