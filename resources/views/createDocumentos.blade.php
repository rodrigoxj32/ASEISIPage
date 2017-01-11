@extends('blog')

@section('content')

<br>
{!! Form::open(['action' => 'DocumentosController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data' ]) !!}

@include('flash::message')

<div class="panel panel-primary" style="width:1000px;margin:auto;">
    <div class="panel-heading" align="center">Subir nuevo documento</div>
    <div class="panel-body" >

        <div class="form-group">
            <label class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del documento" required="true">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Direccion</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" name="Direccion" placeholder="Direccion del documento" required="true">
            </div>
        </div>

        @if(Auth::guest())

        @else
        <div style="display: none">
            <input type="text" name="user_id" value="{{Auth::user()->id}}">
        </div>
        @endif

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! form::submit('Guardar', ['class'=> 'btn btn-primary btn-lg' ]) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}


    @endsection

    @section('js')

    @endsection('js')
