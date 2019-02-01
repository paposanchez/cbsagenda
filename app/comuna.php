<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
     protected $table = 'comuna';
     protected $primaryKey = 'comuna_id';
      protected $fillable=["comuna_id","comuna_nombre","comuna_provincia_id"];


      public function asig_comuna () {

    	return $this->hasmany('App\Asig_comuna','comuna_id');
    }


    public function provincia () {

    	return $this->belongsTo('App\Provincia','provincia_id','comuna_provincia_id');
    }
    


}
