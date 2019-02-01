<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincia';
    protected $primaryKey = 'provincia_id';

    public function comuna() {

    	return $this->hasMany('App\comuna','comuna_provincia_id','provincia_id');
    }
}
