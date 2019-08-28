<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newPageController extends Controller
{
    public function register(){
        return view ('newStyles.Register');
    }
    public function login(){
        return view ('newStyles.login');
    }
    public function single(){
        return view ('newStyles.singleProperty');
    }
    public function allListings(){
        return view ('newStyles.allisting');
    }
    public function Blog(){
        return view ('newStyles.Blog');
    }
}
