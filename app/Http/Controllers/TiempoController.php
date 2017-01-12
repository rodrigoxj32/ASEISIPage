<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tiempo;
use Carbon\Carbon;

class TiempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $eventos = Tiempo::orderBy('id','DESC')->paginate(2);

        $eventos->each(function($eventos){
            $eventos->user;
        });

        $cantidad= 0;
        foreach ($eventos as $evento) {
            $cantidad++;

            $segundos= strtotime($evento->fecha_de_realizacion_tiempo)- time();

            if($segundos<=0){
                $evento->fecha_de_realizacion_tiempo =0; 
            }
            else{
                $evento->fecha_de_realizacion_tiempo = $segundos;
            }
        }

        //dd(time());

        //dd($eventos);

        return view('tiempoEvento')
        ->with('eventos',$eventos)
        ->with('cantidad',$cantidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('createTiempo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $union = $request->fecha ." ". $request->hora;

        $tiempo = new Tiempo();

        $tiempo->nombre_tiempo = $request->Titulo;
        $tiempo->descripcion_tiempo = $request->Descripcion;
        $tiempo->fecha_de_realizacion_tiempo = $union;
        $tiempo->user_id = $request->user_id;

        $tiempo->save();

        return redirect()->route('tiempoIndex');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
