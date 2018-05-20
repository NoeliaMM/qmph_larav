<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table= "tipo";
    
    protected $fillable = [ 'nombre','situacion_id','color' ];

    public function situacion()
    {
        return $this->hasOne('App\Situacion');        
    }

    public function prendas()
    {
        return $this->belongsTo('App\Prenda');
    }
}
