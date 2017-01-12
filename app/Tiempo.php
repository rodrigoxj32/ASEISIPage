<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiempo extends Model
{
    protected $table = 'tiempos';

    protected $fillable = ['nombre_tiempo', 
    'descripcion_tiempo',
    'fecha_de_realizacion_tiempo'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
