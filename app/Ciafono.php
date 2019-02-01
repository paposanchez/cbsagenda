<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciafono extends Model
{
     protected $table = 'agendacia';
    protected $fillable=["id","numero","cia_id","estado"];

    



public function tcuartel()
{
    return $this->belongsTo(Compania::class);
}

}
