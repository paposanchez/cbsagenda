<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claves extends Model
{
     protected $table = 'claves';
   


   public function scopeClave($query, $clave){
  if ($clave)
    return $query->where('clave', 'ILIKE', "%$clave%");
}


public function scopeModo($query, $modo){
  if ($modo)
    return $query->where('modo', 'ILIKE', "%$modo%");
}


}

