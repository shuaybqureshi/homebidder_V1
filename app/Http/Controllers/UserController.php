<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends BaseController
{
   private  $destinationPath = 'uploads/profileImages';

    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

     function fetchProfileImage(){
        $user =Auth::user();
        $image=$user->image()->first();
        if ($image) {
            $imageRoute="updateImage";
        } else {
            $imageRoute="uploadImage";
        }
        return array($image, $imageRoute);

    }
    function checkIfUserInfoIsValid($request){
        $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            ]);
    }
    public function read()
    {
        list($image, $imageRoute) = $this->fetchProfileImage();
        return view('realtorInfo.read', compact("image", "imageRoute"));
    }
    public function edit()
    {
        
        list($image, $imageRoute) = $this->fetchProfileImage();
        return view('realtorInfo.edit', compact("image", "imageRoute"));
    }
    public function update(Request $request)
    {
         // Image validation
         $validatedData = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'max:255'],
            ]);

        $input = $request->all();
        $user =Auth::user();
        $user->fill($input)->save();
        return back()->with('message', 'User Info Successfully Updated!');
    }

    public function uploadImage(Request $request)
    {
        // Image validation
        $validatedData = $request->validate([
            'profile_image' => 'required|image|max:2050'
            ]);
       
        //Image database Upload
        $file = $request->file('profile_image');
        $newFileName= 'profile-image-'.Auth::user()->id .'.'.  $file->getClientOriginalExtension();
        Auth::user()->image()->create(['url'=>$newFileName]);

        // Move Uploaded File
        $file->move($this->destinationPath, $newFileName);
        return back()->with('message', 'Image Sucessfully Uploaded');
    }
    public function updateImage(Request $request)
    {
        // Image validation
        $validatedData = $request->validate([
            'profile_image' => 'required|image|max:2050'
            ]);
        //Image database Upload
        $file = $request->file('profile_image');
        $newFileName= 'profile-image-'.Auth::user()->id .'.'.  $file->getClientOriginalExtension();
        ;
        // echo $user->image->url=$newFileName;
         $image= Auth::user()->image;
         $image->url= $newFileName;
        $image->save();
        
        // Move Uploaded File
        $file->move($this->destinationPath, $newFileName);
        return back()->with('message', 'Image Sucessfully Updated');
    }
}
