<?php namespace App\Http\Controllers;

use View;

//You can create a BaseController:

class BaseController extends Controller {

    public $variable1 = "I am Data";

    public function __construct() {

       $variable2 = "I am Data 2";


       View::share ( 'profileImageLocation', 'uploads/profileImages/' );
       View::share ( 'variable2', $variable2 );
       View::share ( 'variable3', 'I am Data 3' );
       View::share ( 'variable4', ['name'=>'Franky','address'=>'Mars'] );
    }  

}

