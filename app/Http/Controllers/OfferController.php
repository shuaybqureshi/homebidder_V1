<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Offer;
use Auth;
use App\AddtionalPropertyInfo;
use \AppHelper as AppHelper;


use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $property_id= $_POST['property_id'];
        $request->session()->put('property_id', $property_id);
        return view('offer.create');
    }

    public function read(Request $request)
    {
        return view('offer.read');
    }
    
    public function storeOffer(Request $request)
    {
        $property_id = $request->session()->pull('property_id');
        $request['property_id']=$property_id;
        Auth::user()->offer()->create($request->all());
        return redirect('myoffers')->with('message', ' Offer Made Successfully');
    }

    public function myoffers(Request $request)
    {
        $propertyIdArray=Auth::user()->offer()->distinct('property_id')->get(['property_id']);
        // myOffernone(count($propertyIdArray));
        $offersArray = [];
        $propertyArray = [];
        foreach ($propertyIdArray as $property) {
                        $property_id=$property->property_id;
                        $offer= $offersArray[] = Auth::user()->offer()->where([
                            ['property_id', '=', $property_id],
                            ])->orderBy('created_at', 'desc')->first();

                        $property = Property::where([
                            ['id', '=', $property_id],
                            ])->first();
                            
                        $property->offerValue=$offer->value;
                        $property->offerDeposit=$offer->deposit;
                        $propertyArray[]=$property;
        }
        $propertyArray=AppHelper::getpropertyDetails($propertyArray);
        return view('offer.myoffers', compact("offersArray", "propertyArray"));
    }
    public function offerDetails(Request $request)
    {
        $property_id=$_POST['property_id'];
        $propertyArray= Property::where('id', $property_id)->get();
        $propertyArray=AppHelper::getpropertyDetails($propertyArray);
        foreach ($propertyArray as $key => $property_single) {
            $property= $property_single;
        }
        $offersArray= Auth::user()->offer()->where([
            ['property_id', '=', $property_id],
            ])->get();

        return view('offer.offerDetails', compact("offersArray", "property"));
    }

    public function listingOfferDetiailsPost(Request $request)
    {
        $property_id= $_POST['property_id'];
        $request->session()->put('property_id', $property_id);
        return redirect('/listingOfferDetails');
    }
    public function listingOfferDetails(Request $request)
    {
        $property_id = $request->session()->pull('property_id');
        $request->session()->put('property_id', $property_id);
        $propertyArray= Property::where('id', $property_id)->get();
        $propertyArray=AppHelper::getpropertyDetails($propertyArray);
        foreach ($propertyArray as $key => $property_single) {
            $property= $property_single;
        }
    //     $offersActiveArray= Offer::where([
    // ['property_id', '=', $property_id],
    // ['status', '=', 'active'],
    // ])->get();
    $offersActiveArray= Offer::where('property_id', $property_id)
      ->whereIn('status', array('active','accept'))
      ->get();

        foreach ($offersActiveArray as $key => $offer) {
            $offersActiveArray[$key]=AppHelper::getBuyerInfo($offer);
        }
        $offersInActiveArray=Offer::where('property_id', $property_id)
        ->whereIn('status', array('active','accept','accepted'))
        ->get();
        $offersInActiveArray=Offer::where('property_id', $property_id)
        ->whereIn('status', array("expired", "rejected", "countered","reject"))
        ->get();
        foreach ($offersInActiveArray as $key => $offer) {
            $offersInActiveArray[$key]=AppHelper::getBuyerInfo($offer);
        }
        return view('property.offers.listingOfferDetails', compact("property", "offersActiveArray", "offersInActiveArray"));
    }

    public function rejectOffer(Request $request)
    {
        $offer_id=$_POST['offer_id'];
        echo $offer=Offer::find($offer_id);
        $offer->status= 'reject';
        $offer->save();
        return back()->with('message', ' Offer Rejected');
    }

    public function acceptOffer(Request $request)
    {
        $offer_id=$_POST['offer_id'];
        // Accept the winning bid 
        Offer::find($offer_id)->update(['status' => 'accept']);
        $offer=Offer::find($offer_id);
        // Reject all other active bids
        Offer::where([
        ['property_id', '=', $offer->property_id],
        ['status', '=', 'active'],
        ['id', '!=', $offer_id],
        ])->update(['status' => 'reject']);
        // change the status of the house
        $property=Property::find($offer->property_id);
        $property->status= "sold";
        $property->save();     
    
        return back()->with('message', ' Sucessfully Accepted');
    }
}
function myOffernone($length){
     if (!$length){
         echo "test";
        return view('dummyMessage');
    };
}
