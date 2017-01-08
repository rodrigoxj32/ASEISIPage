<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Imagen extends Model
{
    protected $table = 'imagenes';

    protected $fillable = ['nombre_imagen', 'direccion'];


    public function evento(){
        return $this->belongsTo('App\Evento');
    }

    
}
