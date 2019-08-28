<?php
namespace App\Helpers;
use App\AddtionalPropertyInfo;
use App\User;

class AppHelper
{
      public static function testfunction()
      {
             echo "increment ";
      }

      public static function  getpropertyDetails($propertyArray){
            foreach ($propertyArray as $key => $property) {
                $AddtionalPropertyInfoArray=AddtionalPropertyInfo::find($property->id);
                $AddtionalPropertyInfoArray = json_decode($AddtionalPropertyInfoArray, TRUE);
                if ($AddtionalPropertyInfoArray){
                    foreach ($AddtionalPropertyInfoArray as $key => $value) {
                        $property->$key=$value;
                        }
                }
                    $image=$property->image()->first(); 
                    
                    $property->image= $image['url'];;
            }
            return ($propertyArray);
          
          }

          public static function   getBuyerInfo($offer)
          {
          $user = User::find($offer->user_id);
         $offer['buyerName']= "$user->first_name $user->last_name";
         $offer['buyerEmail']= "$user->email";
         $offer['buyerPhone']= "$user->phone";
         return ($offer);
       }
       public static function   getUserInfo($user_id)
          {
            $user = User::find($user_id);
       }
     
        

}