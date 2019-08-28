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
// use Auth;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newStyle', 'HomeController@newstyle');
Route::get('/newListingDetails', 'HomeController@newListingDetails');
// User  Routes
Route::get('/editUserInfo', 'UserController@edit')->name('editUserInfo');
Route::get('/userinfo', 'UserController@read')->name('userinfo');
Route::post('/updateUserInfo', 'UserController@update')->name('updateUserInfo');
// Route::get('/user/{id}', 'UserController@readUserInfo')->name('read');
Route::get('/user', 'UserController@readUserInfo')->name('read');
Route::post('/uploadImage', 'UserController@uploadImage')->name('uploadImage');
Route::post('/updateImage', 'UserController@updateImage')->name('updateImage');
Route::get('/sucessfulRegistration', 'UserController@sucessfulRegistration');

Route::get('/additonalInfo', 'RealtorInfoController@index');

// Property  Routes
Route::get('/createListing', 'PropertyController@step1Create')->name('createListing');
Route::get('/createListing-2', 'PropertyController@step2Create')->name('createListing-2');
Route::get('/createListing-3', 'PropertyController@step3Create')->name('createListing-3');
Route::post('/step1store', 'PropertyController@step1store')->name('step1store');
Route::post('/step2store', 'PropertyController@step2store')->name('step2store');
Route::post('/step3store', 'PropertyController@step3store')->name('step3store');
Route::get('/MyListings', 'PropertyController@MyListings')->name('MyListings');
Route::post('/editListing', 'PropertyController@editListing')->name('editListing');
Route::post('/step1update', 'PropertyController@step1update')->name('step1update');
Route::get('/editListingStep2', 'PropertyController@editListingStep2')->name('editListingStep2');
Route::get('/editListingStep3', 'PropertyController@editListingStep3')->name('editListingStep3');
Route::post('/step2update', 'PropertyController@step2update')->name('step2update');
Route::post('/deleteListing', 'PropertyController@deleteListing')->name('deleteListing');
Route::get('/Listings', 'PropertyController@viewAllListing')->name('viewAllListing');
// Route::get('/Listing/{id}', 'PropertyController@ListingDetails')->name('ListingDetails');
Route::get('/test1', 'PropertyController@test');

// Offer Routes
Route::post('/createOffer', 'OfferController@create')->name('createOffer')->middleware('checkIfSeller');
Route::get('/readoffer', 'OfferController@read')->name('readoffer');
Route::get('/myoffers', 'OfferController@myoffers')->name('myoffers');
Route::post('/storeOffer', 'OfferController@storeOffer')->name('storeOffer');
Route::post('/offerDetails', 'OfferController@offerDetails')->name('offerDetails');
Route::post('/listingOfferDetails', 'OfferController@listingOfferDetiailsPost')->name('OfferController');
Route::get('/listingOfferDetails', 'OfferController@listingOfferDetails')->name('OfferController');
Route::post('/acceptOffer', 'OfferController@acceptOffer')->name('acceptOffer');
Route::post('/rejectOffer', 'OfferController@rejectOffer')->name('rejectOffer');
Route::get('/SellerBID', 'PropertyController@sellerRedirect');

Route::get('/newRegister', 'newPageController@register');
Route::get('/newLogin', 'newPageController@login');
Route::get('/newSingleListing', 'newPageController@single');
Route::get('/newAllListings', 'PropertyController@viewAllListingN');
Route::get('/Listing', 'PropertyController@ListingDetails');
Route::get('/Blog', 'newPageController@Blog');



// Test
Route::get('/', function () {
    return view('home');

});

Route::get('/test', function () {
    //  Auth::user()->id;
    $property_id= 1;
     $property= Property::find($property_id);
      $seller_id=$property->user_id;

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

Route::get('/test123', function () {
 echo $_SERVER['REQUEST_URI'];
});



