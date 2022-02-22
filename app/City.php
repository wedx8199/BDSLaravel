<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table="city";
    public function district()
    {
    	return $this->hasMany('App\District','id_city','id');
    }

	public function bds()
    {
    	return $this->hasMany('App\BDS','id_city','id');
    }
}
