<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendacb extends Model
{
     protected $table = 'agendacb';
    protected $fillable=["id","numero","cuerpo_id","estado"];


 public function phone()
    {
        return $this->belongsTo('App\Compania');
    }


}
