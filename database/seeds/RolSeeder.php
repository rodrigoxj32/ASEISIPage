<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('roles')->insert([
            'nombre_rol' => 'Administrador',
            'descripcion_rol' => 'Usuario con todos los permisos de administracion de la pagina, puede crear contenido y eliminar',
        ]);

        DB::table('roles')->insert([
            'nombre_rol' => 'Usuario',
            'descripcion_rol' => 'Usuario que puede ver y comentar el contenido de la pagina',
        ]);
    }
}


