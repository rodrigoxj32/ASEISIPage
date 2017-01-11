@extends('blog')

@section('content')

<br>
{!! Form::open(['route' => ['updateDocumento',$documento->id],'method'=>'PUT'])!!}}




@include('flash::message')		

<div class="panel panel-primary" align="center" style="width: 1000px;margin: auto;  ">
    <div class="panel-heading">Subir nuevo documento</div>
    <div class="panel-body" >
        <br>

        <div>
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre del documento" required="" value="{{$documento->nombre_documento}}">  
        </div>



        <div>           
            <br>
            <label>Descripcion</label>
            <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250" >{{$documento->descripcion_documento}}</textarea>

        </div>

        <div>
            <label>Direccion</label>
            <input type="url" class="form-control" name="Direccion" placeholder="Direccion del documento" required="" value="{{$documento->direccion_documento}}">  
        </div>

        @if(Auth::guest())

        @else
        <div style="display: none">
            <input type="text" name="user_id" value="{{Auth::user()->id}}">
        </div>
        @endif

        <div>
            <br>
            <div class="panel-body">
                {!! form::submit('Guardar', ['class'=> 'btn btn-primary btn-lg' ]) !!}  
            </div>
        </div>
        {!! Form::close() !!}


        @endsection

        @section('js')

        @endsection('js')
