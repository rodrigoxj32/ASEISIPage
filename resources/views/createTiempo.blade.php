@extends('blog')

@section('content')

<br>
{!! Form::open(['action' => 'TiempoController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data' ]) !!}

@include('flash::message')

<div class="panel panel-primary" style="width: 1000px;margin: auto;  ">
    <div class="panel-heading" align="center">Crear Evento en Cuenta Regresiva</div>
    <div class="panel-body" >
        <br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Titulo" placeholder="Titulo del evento" required="">
            </div>
        </div>

         <div class="form-group clockpicker" data-autoclose="true" >
            {!! form::label('hora', 'Hora de realizacion', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                <input type="time" class="form-control"  name="hora" required="" placeholder="15:00">
            </div>
        </div>

        <div class="form-group">
            {!! form::label('fecha', 'Fecha de realizacion', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                <input type="date" class="form-control" id="datepicker" name="fecha" data-provide="datepicker" placeholder="año/mes/dia" required="true" data-date-format="yyyy-mm-dd">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
            </div>
        </div>
        <br>


        <div style="display: none">
            <input type="text" name="user_id" value="{{Auth::user()->id}}">
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


        $('.clockpicker').clockpicker();
    



    </script>
    @endsection('js')