<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    protected $table= "estilo";
    
    protected $fillable = [ 'estilo','descripcion' ];

    public function prendas()
    {
        return $this->belongsTo('App\Prenda');
    }
}
