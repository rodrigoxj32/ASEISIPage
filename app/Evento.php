<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = ['nombre_evento', 
    'descripcion_evento',
    'fecha_de_realizacion'];
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
