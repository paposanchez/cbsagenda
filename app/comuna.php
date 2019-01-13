<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comuna extends Model
{
     protected $table = 'comuna';
      protected $fillable=["comuna_id","comuna_nombre","comuna_provincia_id"];


      public function asig_comuna () {

    	$this->hasmany('App\Asig_comuna','comuna_id');
    }

}
