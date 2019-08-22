<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;
use App\Image;
use App\AddtionalPropertyInfo;

use Auth;

// class PropertyController extends Controller
class PropertyController extends BaseController

{
   private  $destinationHomeImagePath = 'uploads/homeImages/';

    function step1Create(Request $request){

        return view ('property.create.step1');
    } 
    function step2Create(){
        // echo $value = $request->session()->pull('property_id');

        return view ('property.create.step2');
    } 
    
    function step3Create(){
        return view ('property.create.step3');
    } 
    function step1store(Request $request){
        $validatedData = $request->validate([
            'address' => ['required', 'string', 'max:255'],
            'price'=>'required|numeric|between:0,10000000',
            'mls' => ['required', 'string', 'max:10'],
            'city' => ['required', 'string', 'max:50'],
            'postal' => ['required', 'string', 'max:6'],
            ]);

            $property=Auth::user()->property()->create($request->all());
            
           echo $property->id;
           $request->session()->put('property_id', $property->id);


            return redirect()->route('createListing-2');


    } 
    function step2store(Request $request)
    {
        $validatedData = $request->validate([
            'bed' => 'required|numeric|between:0,50',
            'bath' => 'required|numeric|between:0,50',
            'year' => 'required|numeric|between:1500,2050',
            'taxes' => 'required|numeric|between:0,100000',
            'desc' => ['required', 'string', 'max:1000'],
            ]);
        echo $property_id = $request->session()->pull('property_id');
        $request->session()->put('property_id', $property_id);
        $property= Property::find($property_id);
        $property->AddtionalPropertyInfo()->create($request->all());
        $property->status='active';
        $property->save();
        return redirect()->route('createListing-3');
        // return redirect()->route('home')->with('message', 'Home Sucessfully Uploaded');;

        // $AddtionalPropertyInfo=Auth::user()->property()->create($request->all());

    }
    function step3store(Request $request){
        $validatedData = $request->validate([
            'image-1' => 'required|image|max:2050',
            'image-2' => 'image|max:2050',
            'image-3' => 'image|max:2050',
            'image-4' => 'image|max:2050',
            'image-5' => 'image|max:2050',
            ]);

             $property_id = $request->session()->pull('property_id');
            $request->session()->put('property_id', $property_id);
            // $property_id=1;

for ($x = 1; $x <= 5; $x++) {

$file = $request->file("image-$x");
    if ($request->file("image-$x")) {
        $file = $request->file("image-$x");
        $newFileName= 'home-'.$property_id ."-image-$x.".  $file->getClientOriginalExtension();
        $property= Property::find($property_id);
        $property->image()->create(['url'=>$newFileName]);
        // Move Uploaded File
    $file->move($this->destinationHomeImagePath, $newFileName);
    } 
}
        return redirect()->route('MyListings')->with('message', 'Home Sucessfully Uploaded');;

}

    
    function MyListings(Request $request)
{   
$propertyArray= Auth::user()->property->where('status', '!=', 'deleted');
$propertyArray=getpropertyDetails($propertyArray); 
return view ('property.read.myListings', compact("propertyArray"));

}
function editListing(Request $request, $id)
{
$request->session()->put('property_id', $id);
$property= Property::find($id);
return view ('property.edit.step1', compact("property"));
}
function step1update(Request $request){
    $property_id = $request->session()->pull('property_id');
    $request->session()->put('property_id', $property_id);
     $property= Property::find($property_id);
     $input = $request->all();
     $property->fill($request->all())->save();
     
     return redirect('editListingStep2/');

}
function editListingstep2(Request $request)
{
    $property_id = $request->session()->pull('property_id');
    $request->session()->put('property_id', $property_id);
     $AddtionalPropertyInfo=AddtionalPropertyInfo::find($property_id);
     if (!$AddtionalPropertyInfo){
return view ('property.create.step2');
     }
return view ('property.edit.step2', compact("AddtionalPropertyInfo"));

}

function step2update(Request $request) {
    $property_id = $request->session()->pull('property_id');
    $request->session()->put('property_id', $property_id);
     $AddtionalPropertyInfo= AddtionalPropertyInfo::find($property_id);
     $input = $request->all();
     $AddtionalPropertyInfo->fill($request->all())->save();
     return redirect()->route('MyListings')->with('message', 'Home Sucessfully Updated');;
     
     }
function deleteListing(Request $request)
{
  $property_id=$_POST['property_id'];
        $property= Property::find($property_id);
         $property->status="deleted";
         $property->save();
         return back()->with('message', ' Sucessfully Deleted');

}
function viewAllListing(Request $request)
{
     $propertyArray= Property::where('status', 'active')->get();
    $propertyArray=getpropertyDetails($propertyArray); 
 return view ('property.read.allListing', compact("propertyArray"));

}
function ListingDetails($id){
    $propertyArray= Property::where('id', $id)->get();
    $propertyArray=getpropertyDetails($propertyArray); 
    
    foreach ($propertyArray as $key => $property_single) {
        $property= $property_single;
    }
     
       $images=$property->image()->get();
    return view ('property.read.propertyDetails', compact("property", "images"));

}


}
function getpropertyDetails($propertyArray){
    foreach ($propertyArray as $key => $property) {
        $AddtionalPropertyInfoArray=AddtionalPropertyInfo::find($property->id);
        $AddtionalPropertyInfoArray = json_decode($AddtionalPropertyInfoArray, TRUE);
        if ($AddtionalPropertyInfoArray){
            foreach ($AddtionalPropertyInfoArray as $key => $value) {
                $property->$key=$value;
                }
        }
            $image=$property->image()->first();
            $property->image=$image->url;
    }
    return ($propertyArray);
  
  }
