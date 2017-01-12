<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiempo extends Model
{
    protected $table = 'tiempos';

    protected $fillable = ['nombre_tiempo', 
    'descripcion_tiempo',
    'fecha_de_realizacion_tiempo'];


    //relacion uno a muchos con comentarios
    public function comentarios(){
        return $this->hasMany('App\Comentario');
    }

    public function imagenes(){
        return $this->hasMany('App\Imagen');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
