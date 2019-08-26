<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table="offer";
    protected $fillable = [
        'user_id', 'property_id', 'value','deposit' , 'conditions','status'
    ];

}
