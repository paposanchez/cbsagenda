<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asig_com extends Model
{
    protected $table = 'asig_comuna';


    public function cuerpo () {

    	$this->belongto('App\Cuerpo');
    }

    


}
