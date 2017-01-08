<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';

    protected $fillable = ['nombre_documento', 
    'descripcion_documento',
    'direccion_documento'];


    public function user(){
        return $this->belongsTo('App\User');
    }

}
