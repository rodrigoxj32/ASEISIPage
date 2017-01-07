<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Imagen;
use Carbon\Carbon;
use DB;
use App\Comentario;

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
        //dd($request->all());

        foreach ($request->imagen1 as $imagenes) {
             $variable = $imagenes->getClientOriginalExtension();



             if($variable == "png" || $variable=="jpg" || $variable== "jpeg"){
                //dd($variable);

             }else{
                //dd($variable);
                flash('Error en las imagenes por favor seleccione el formato correcto', 'danger');

                return redirect()->route('eventoCreate');
             }
        }
        

        $evento = new Evento();

        $evento->nombre_evento = $request->Titulo;
        $evento->fecha_de_realizacion = $request->fecha;
        $evento->descripcion_evento = $request->Descripcion;
        $evento->tipo = $request->tipo;
        $evento->user_id = \Auth::user()->id;

        $evento->save();


                     
        
        foreach ($request->imagen1 as $imagenes) {
            
            if(file($imagenes)){
            $imagen  = new Imagen();  

              $original =$imagenes;
            
              $imagen->nombre_imagen =  time().'.' . $original->getClientOriginalExtension();
              $imagen->direccion = "/images/gallery/".$imagen->nombre_imagen;
              $dire =  public_path(). "/images/gallery";
              $imagen->evento()->associate($evento);
              $original->move($dire, $imagen->nombre_imagen);

             $imagen->save();
              
            }

            for ($i=0; $i <100000000; $i++) { 
                # code...
            }
        }
        //dd($request->imagen1);
        if ($request->tipo == 1) {
            return redirect()->route('eventoIndex');
        }else{
            return redirect()->route('publicidadIndex');
        }
         

         //return view ('indexBlog');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $eventos = Evento::orderBy('id','DESC')->paginate(2);

        $eventos->each(function($eventos){
            $eventos->imagenes;
            $eventos->user;
        });


        //dd($eventos);

        return view('indexBlog')->with('eventos',$eventos);
    }

        public function show2(){
        $eventos = Evento::orderBy('id','DESC')->paginate(2);

           $eventos->each(function($eventos){
            $eventos->imagenes;
        });

   
        //dd($eventos);

        return view('indexPublicidad')->with('eventos',$eventos);
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
        $pivote = DB::table('comentario_user') -> where('comentario_id', '=', $id)->delete();

        $imagenes = Imagen::where('evento_id','=',$id)->get();

        foreach ($imagenes as $imagen) {
            unlink(public_path() .$imagen->direccion);
        }

        $evento = Evento::where('id', '=', $id)->get();

        foreach ($evento as $event) {
            $E = $event->tipo;
        }
        $eventos = Evento::where('id', '=', $id)->delete();


        if ($E == 1) {
            return redirect()->route('eventoIndex');
        }else{
            return redirect()->route('publicidadIndex');
        }
        
    }


    public function home(){
   
    }

    public function verEvento($id){

        $eventos = Evento::where('id', "=", $id)->paginate(10);

        $eventos->each(function($eventos){
            $eventos->imagenes;
            $eventos->comentarios;            
        });

        $comentarios = Comentario::where('evento_id', "=", $id)->paginate(10);
        $comentarios->each(function($comentarios){
            $comentarios->user;
        });

        //dd($eventos);

        //return redirect('/eventoO')->with('eventos',$eventos);  ;

        return view('verBlog')
        ->with('eventos',$eventos)
        ->with('comentarios',$comentarios);
   }
}
