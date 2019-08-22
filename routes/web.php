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
use App\Property;




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/editUserInfo', 'UserController@edit')->name('editUserInfo');
Route::get('/userinfo', 'UserController@read')->name('userinfo');
Route::post('/updateUserInfo', 'UserController@update')->name('updateUserInfo');

Route::get('/additonalInfo', 'RealtorInfoController@index');
Route::post('/uploadImage', 'UserController@uploadImage')->name('uploadImage');
Route::post('/updateImage', 'UserController@updateImage')->name('updateImage');

Route::get('/createListing', 'PropertyController@step1Create')->name('createListing');
Route::get('/createListing-2', 'PropertyController@step2Create')->name('createListing-2');
Route::get('/createListing-3', 'PropertyController@step3Create')->name('createListing-3');
Route::post('/step1store', 'PropertyController@step1store')->name('step1store');
Route::post('/step2store', 'PropertyController@step2store')->name('step2store');
Route::post('/step3store', 'PropertyController@step3store')->name('step3store');
Route::get('/MyListings', 'PropertyController@MyListings')->name('MyListings');
Route::get('/editListing/{id}', 'PropertyController@editListing')->name('editListing');
Route::post('/step1update', 'PropertyController@step1update')->name('step1update');
Route::get('/editListingStep2', 'PropertyController@editListingStep2')->name('editListingStep2');
Route::get('/editListingStep3', 'PropertyController@editListingStep3')->name('editListingStep3');
Route::post('/step2update', 'PropertyController@step2update')->name('step2update');
Route::post('/deleteListing', 'PropertyController@deleteListing')->name('deleteListing');
Route::get('/Listings', 'PropertyController@viewAllListing')->name('viewAllListing');
Route::get('/Listing/{id}', 'PropertyController@ListingDetails')->name('ListingDetails');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
$string = 'ABCDEFGHIJKLMNOPHQZE';
$stringLength = strlen($string);
$randomIndex = mt_rand(0, $stringLength - 1);
 $mls=$string[$randomIndex] .rand(100000, 1000000);

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

Route::get('/createProperty', function () {
  echo  $user=user::find(1);
  $user->property()->create(['address'=>'123 abc street']);
});



