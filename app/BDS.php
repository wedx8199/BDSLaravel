<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BDS extends Model
{
    //
    protected $table="bds";

        public function type()
    {
    	return $this->belongsTo('App\Type','id_type','id');
    }
        public function district()
    {
    	return $this->belongsTo('App\District','id_district','id');
    }
        public function city()
    {
    	return $this->belongsTo('App\City','id_city','id');
    }
        public function user()
    {
    	return $this->belongsTo('App\User','id_owner','id');
    }
        public function file()
    {
    	return $this->hasMany('App\File','id_bds','id');
    }
}
