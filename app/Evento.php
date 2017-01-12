<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = ['nombre_evento', 
    'descripcion_evento',
    'fecha_de_realizacion'];


    public function user(){
        return $this->belongsTo('App\User');
    }



    


}
