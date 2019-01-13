<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuerpo extends Model
{

  use SoftDeletes;

   protected $table = 'cuerpos';
   protected $fillable=["id","nombre","comuna","fundacion","direccion"];

   public function newQuery() {
		$query = parent::newQuery();
		return $query->withTrashed();
	}

	// Relación entre cuerpo y compañia 
        public function cia()
        {
            return $this->hasMany('App\Compania');
        }

  //relacion entre cuerpo y comuna
    
        public function comuna()
        {
            return $this->hasMany('App\Asig_com');
        }      




// Query Scope 

// se usa ILIKE  para no variar mayusculas o minusculas en la busqueda.        
public function scopeNombre($query, $nombre){
  if ($nombre)
    return $query->where('nombre', 'ILIKE', "%$nombre%");
}


public function scopeComuna($query, $comuna){
  if ($comuna)
    return $query->where('comuna', 'ILIKE', "%$comuna%");
}

}


