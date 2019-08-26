<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table="property";
    protected $fillable = [
        'address', 'price', 'mls','city','postal'
    ];
    public function AddtionalPropertyInfo()
    {
        return $this->hasOne('App\AddtionalPropertyInfo');
    }
    public function image()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
    public function offer()
    {
        return $this->hasMany('App\Offer');
    }
}
