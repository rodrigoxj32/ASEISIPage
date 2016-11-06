<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = ['opinion', 'evento_id'];


    //relacion inversa de uno a muchos con evento
    public function evento(){
        return $this->belongsTo('App\Evento');
    }

    public function user(){
        return $this->belongsToMany('App\User');
    }

}
