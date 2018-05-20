<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $table= "temporada";
    
    protected $fillable = [ 'temporada' ];

    public function prendas()
    {
        return $this->belongsTo('App\Prenda');
    }
}


