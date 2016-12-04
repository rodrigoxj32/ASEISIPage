<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Imagen;
use Carbon\Carbon;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createBlog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(time());


        $evento = new Evento();

        $evento->nombre_evento = $request->Titulo;
        $evento->fecha_de_realizacion = $request->fecha;
        $evento->descripcion_evento = $request->Descripcion;
        $evento->tipo = 1;
        $evento->user_id = \Auth::user()->id;

        $evento->save();
                     
        $imagen  = new Imagen();

        if($request->file('imagen1')){
          $original = $request->file('imagen1');

          $imagen->nombre_imagen =  time().'.' . $original->getClientOriginalExtension();
          $imagen->direccion = "/images/gallery/".$imagen->nombre_imagen;
          $dire =  public_path(). "/images/gallery";
          $imagen->evento()->associate($evento);
          $original->move($dire, $imagen->nombre_imagen);

          $imagen->save();

          return redirect('/evento');
        }

         

         //return view ('indexBlog');

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


    public function home(){
   
    }
}
