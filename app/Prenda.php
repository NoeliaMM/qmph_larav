<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    protected $table= "prendas";
    
    protected $fillable = [ 'codigoBarras','marca_id','tipo_id','estilo_id','temporada_id','color','foto' ];

    public function tipo()
    {
        return $this->hasOne('App\Tipo');        
    }

    public function marca()
    {
        return $this->hasOne('App\Marca');        
    }

    public function estilo()
    {
        return $this->hasOne('App\Estilo');        
    }

    public function temporada()
    {
        return $this->hasOne('App\Temporada');        
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\User');
    }
}
