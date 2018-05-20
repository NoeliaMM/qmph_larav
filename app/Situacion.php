<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situacion extends Model
{
    protected $table= "situacion";
    
    protected $fillable = [ 'situacion' ];

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }
}
