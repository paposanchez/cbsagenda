<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $table = 'companias';
    protected $fillable=["id","nombre","numeral","direccion","comuna","fundacion","direccion", "estado","cuerpo_id"];

    // Relación
        public function cuerpo()
        {
           return $this->belongsTo(Cuerpo::class);
        }


        public function tcuerpo()
        {
           return $this->hasOne('App\Cuerpo');
        }

        public function tcia()
        {
           return $this->belongsTo('App\Agendacia');
        }
 
 
}
