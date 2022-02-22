<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table="types";
	public function bds()
    {
    	return $this->hasMany('App\BDS','id_type','id');
    }
}
