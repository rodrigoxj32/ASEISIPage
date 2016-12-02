<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Rol;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::orderBy('nombre_rol','ASC')->lists('nombre_rol','id');

        
        /*dd(Auth::guest());
        dd(Auth::user()->id);*/


        return view('auth.register')
        ->with('roles',$roles);
    }

        public function reset(){
        $roles = Rol::orderBy('nombre_rol','ASC')->lists('nombre_rol','id');

        
        /*dd(Auth::guest());
        dd(Auth::user()->id);*/


        return view('auth.reset')
        ->with('roles',$roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        try {
                    /*dd(Auth::guest());
            dd(Auth::user()->password);*/

            $usuario = new User();

            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->rol_id = $request->rol_id;

            $usuario->save();
            flash('Se ha registrador el usuario', 'success');
            return redirect()->route('register');

        }catch (\Illuminate\Database\QueryException $e){
            flash('EL correo ya existe por favor ingrese uno distinto', 'danger');
            return redirect()->route('register');
        }
    
    }

        public function Resetstore(Request $request){

        try {

            
            $usuario = User::find(Auth::user()->id);


            $usuario->password = bcrypt($request->password);


            $usuario->save();
            flash('Se ha Actualizado la contraseña', 'success');
            return redirect()->route('reset');

        }catch (\Illuminate\Database\QueryException $e){
            flash('Verifique los datos', 'danger');
            return redirect()->route('reset');
        }
    
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
