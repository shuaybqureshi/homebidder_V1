<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddtionalPropertyInfo extends Model
{
    protected $table="addtional_property_info";
    protected $fillable = [
        'bed', 'bath', 'year','desc','taxes'
    ];
    public function getTaxesAttribute($value)
    {
        if ($_SERVER['REQUEST_URI']!='/editListingStep2') {
            $value= number_format($value) ;
        }
       return ucfirst($value);
   }
}
