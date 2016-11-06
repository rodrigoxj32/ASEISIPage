<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagenes';

    protected $fillable = ['nombre_imagen', 'descripcion_imagen'];


    public function evento(){
        return $this->belongsToMany('App\Evento');
    }
    
}
