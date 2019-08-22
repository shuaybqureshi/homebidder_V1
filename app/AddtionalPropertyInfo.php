<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddtionalPropertyInfo extends Model
{
    protected $table="addtional_property_info";
    protected $fillable = [
        'bed', 'bath', 'year','desc','taxes'
    ];
}
