<?php

use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Autorización.',
            'descripcion_documento' => 'Documento con el cual se solicita autorización para poder realizar una actividad en nombre de la universidad, facultad, representación de la escuela, etc.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQSXplQV9fTXVEMDg',
            'user_id'=>1;
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Cambio de Carrera.',
            'descripcion_documento' => 'Solicitud con la cual se puede solicitar un cambio de carrera dentro de la misma facultad.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQUEpDc3B6Mm5KRk0',
            'user_id'=>1;
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Certificación.',
            'descripcion_documento' => 'Solicitud con la cual se puede solicitar una certificación de notas, plan de estudio, de programas.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQd2x5Y3FmOHNEOWs',
            'user_id'=>1;
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Académica.',
            'descripcion_documento' => 'Solicitud con la cual se puede solicitar constancia de horarios, alumno inscrito, aptitud, etc.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQMEN6VEpLOS1kZjA',
            'user_id'=>1;
        ]);

    }
}
