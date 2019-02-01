<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $primaryKey = 'region_id';



    public function comunas() {

    	return $this->hasMany(Provincia::class);
    }
}
