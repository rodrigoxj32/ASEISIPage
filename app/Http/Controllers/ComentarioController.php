<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comentario;
use App\Evento;
use App\User;
use DB;
class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $comentario = new Comentario();

        $usuario = User::where('id', "=", $request->user_id)->get();
        $user;

        foreach ($usuario as $U) {
            $user = $U;
        }

        //dd($user->name);

        //$comentario->user_id = $request->user_id;
        $comentario->evento_id = $request->evento_id;
        $comentario->opinion = $request->Descripcion;

        $comentario->save();

        $comentario->user()->sync($usuario);


        return redirect('/verEvento/'.$request->evento_id.'/ver');
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
    public function destroy($id){

        $temp = DB::table('comentario_user') -> where('comentario_id', '=', $id)->get();


        
        foreach ($temp as $v) {
           // dd($v);             
            $evento = Comentario::where("id","=", $v->comentario_id)->get();

        }

        
        foreach ($evento as $key) {
                    $even = $key->evento_id;
                }        
        

//        dd($even);

        $pivote = DB::table('comentario_user') -> where('comentario_id', '=', $id)->delete();

        $comentario = Comentario::where('id', '=', $id)->delete();

        //flash('Se han borrado los porcentajes', 'danger' );

            return redirect('/verEvento/'.$even.'/ver');        
    }
}

