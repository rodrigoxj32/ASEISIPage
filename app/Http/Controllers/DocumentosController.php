<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Documentos;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $documentos = Documentos::orderBy('id','DESC')->paginate(2);

        $documentos->each(function($documentos){   
            $documentos->user;
        });


        //dd($documentos);       
        
        return view('indexDocumentos')->with('documentos',$documentos);
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
    public function store(Request $request){
        //dd($request->all());

        $documento = new Documentos();

        $documento->nombre_documento = $request->nombre;
        $documento->descripcion_documento = $request->Descripcion;
        $documento->direccion_documento = $request->Direccion;
        $documento->user_id = $request->user_id;

        $documento->save();

        return redirect()->route('documentoIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){

        return view('createDocumentos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $documento = Documentos::find($id);   

        return view ('editDocumentos')
        ->with('documento',$documento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $documento = Documentos::find($id);

        $documento->nombre_documento = $request->nombre;
        $documento->descripcion_documento = $request->Descripcion;
        $documento->direccion_documento = $request->Direccion;
        $documento->user_id = $request->user_id;

        $documento->save();

        return redirect()->route('documentoIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
        $documento = Documentos::where('id', '=', $id)->delete();

        return redirect()->route('documentoIndex');
    }
}
