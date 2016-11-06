<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';

    protected $fillable = ['nombre_rol', 'descripcion_rol'];


    //relacion de uno a uno inversa
    public function user(){
        return $this->belongsTo('App\User');
    }


}
