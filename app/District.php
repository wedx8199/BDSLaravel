<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $table="district";
    public function city()
    {
    	return $this->belongsTo('App\City','id_city','id');
    }
    public function bds()
    {
    	return $this->hasMany('App\BDS','id_district','id');
    }
}
