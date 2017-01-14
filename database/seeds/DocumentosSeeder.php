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
            'user_id'=>1,
        ]);


        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Certificación.',
            'descripcion_documento' => 'Solicitud con la cual se puede solicitar una certificación de notas, plan de estudio, de programas.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQd2x5Y3FmOHNEOWs',
            'user_id'=>1,
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Académica.',
            'descripcion_documento' => 'Solicitud con la cual se puede solicitar constancia de horarios, alumno inscrito, aptitud, etc.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQMEN6VEpLOS1kZjA',
            'user_id'=>1,
        ]);


        DB::table('documentos')->insert([
            'nombre_documento' => 'Formato de Sanción Disciplinaria.',
            'descripcion_documento' => 'Solicitud con la cual se hace constar de no tener pendiente el cumplimiento de la sanción disciplinaria.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQU2ItZVQ2dXI2SE0',
            'user_id'=>1,
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Actividad Diferida.',
            'descripcion_documento' => 'Solicitud con la cual se solicita realizar una actividad diferida en la escuela de Ingeniería de Sistemas Informáticos.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQdUNXS2c5R2tjNEE',
            'user_id'=>1,
        ]);        


        DB::table('documentos')->insert([
            'nombre_documento' => 'Formato de Inscripción Condicionada.',
            'descripcion_documento' => 'Formato con el que se solicita una inscripción condicionada a la administración académica de la facultad de Ingeniería y Arquitectura.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQXzItYnE1N3p3ZjA',
            'user_id'=>1,
        ]);


        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Prorroga de la Calidad de Egresado.',
            'descripcion_documento' => 'Solicitud para solicitar una prorroga de la calidad de egresado, explicando los motivos por los cuales no ha recibido su investidura académica.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQREx5MS1TZGx1RlE',
            'user_id'=>1,
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Indicaciones para formato de portada de tesis.',
            'descripcion_documento' => 'Indicaciones para el formato de la portada de tesis para la facultad de Ingeniería y Arquitectura.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQenk5NllCNFJUVzA',
            'user_id'=>1,
        ]);


        DB::table('documentos')->insert([
            'nombre_documento' => 'Requisitos para Entrega de Ejemplar CD, TG FIA-UES.',
            'descripcion_documento' => 'Indicaciones para la entrega de ejemplar y archivo digital (CD) de trabajos de graduación en biblioteca FIA-UES.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQVUx0d1VBOEhYVDA',
            'user_id'=>1,
        ]);


        DB::table('documentos')->insert([
            'nombre_documento' => 'Indicaciones Para Tramites de Graduación.',
            'descripcion_documento' => 'Indicaciones de los tramites a realizar para poder graduarse.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQdWcyRlM2amVPdlk',
            'user_id'=>1,
        ]);        

        DB::table('documentos')->insert([
            'nombre_documento' => 'Resumen UESE.',
            'descripcion_documento' => 'Formato con el cual se solicita que se envié a la Unidad de Estudios Socio Económicos un resumen de las notas.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQZC1zOXNET3hBUEU',
            'user_id'=>1,
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Formato de Retiro de Unidades de Aprendizaje en Periodo Extraordinario.',
            'descripcion_documento' => 'Solicitud con la cual se explica los motivos por el cual se solicita el retiro de las unidades de aprendizaje una vez pasado el periodo ordinario.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQOGdTR00tUXRRTk0',
            'user_id'=>1,
        ]);

        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Cambio de Carrera.',
            'descripcion_documento' => 'Solicitud con la cual se puede solicitar un cambio de carrera dentro de la misma facultad.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQUEpDc3B6Mm5KRk0',
            'user_id'=>1,
        ]);
        
        DB::table('documentos')->insert([
            'nombre_documento' => 'Solicitud de Traslado de Multidisciplinaria a FIA-UES.',
            'descripcion_documento' => 'Documento por el cual se solicita el traslado desde una multidisciplinaria hacia la facultad de Ingeniería y  Arquitectura del campus central.',
            'direccion_documento' => 'https://drive.google.com/open?id=0BwYMKgk2x-kQWWlHZEpDVzJIWXc',
            'user_id'=>1,
        ]);                

    }
}
