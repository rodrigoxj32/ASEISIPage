<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_imagen',100);
            $table->string('descripcion_imagen');
            $table->timestamps();
        });

        //tabla pivote de evento imagenes
        Schema::create('evento_imagen', function(Blueprint $table){
            $table->increments('id');
            $table->integer('evento_id')->unsigned();
            $table->integer('imagen_id')->unsigned();

            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('imagen_id')->references('id')->on('imagenes');

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
