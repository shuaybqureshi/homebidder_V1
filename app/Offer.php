<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table="offer";
    protected $fillable = [
        'user_id', 'property_id', 'value','deposit' , 'conditions','status'
    ];
    public function getDepositAttribute($value){
        $value= number_format ($value) ;
        return ucfirst($value);
    }
    public function getValueAttribute($value){
        $value= number_format ($value) ;
        return ucfirst($value);
    }

}
