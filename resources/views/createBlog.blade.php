@extends('blog')

@section('content')

<br>
{!! Form::open(['action' => 'EventoController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data' ]) !!}

@include('flash::message')

<div class="panel panel-primary" style="width: 1000px;margin: auto;  ">
    <div class="panel-heading" align="center">Crear Evento</div>
    <div class="panel-body" >
        <br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Titulo" placeholder="Titulo del evento" required="">
            </div>
        </div>

        <div class="form-group">
            {!! form::label('fecha', 'Fecha de realizacion', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                <input type="date" class="form-control" id="datepicker" name="fecha" data-provide="datepicker" placeholder="mes/dia/año" required="true" data-date-format="yyyy-mm-dd">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Seleccione el tipo de publicacion</label>
            <div class="col-sm-10">
                <p><input type="radio" name="tipo" value="1" checked="">  Evento</p>
                <p><input type="radio" name="tipo" value="0">  Publicidad</p>
            </div>
        </div>

        <div style="display: none">
            <input type="text" name="user_id" value="{{Auth::user()->id}}">
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Seleccione las imagenes a subir</label>
            <div class="col-sm-10">
                {!! form::file('imagen1[]', ['class' => 'form-control', 'multiple', 'accept'=>'.png,.jpg,.jpeg'])!!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! form::submit('Guardar', ['class'=> 'btn btn-primary btn-lg' ]) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}


    @endsection

    @section('js')

    <script>
        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            startDate: '-2d'
        });





    </script>
    @endsection('js')
