<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table="files";
	public function bds()
    {
    	return $this->belongsTo('App\BDS','id_bds','id');
    }
}
