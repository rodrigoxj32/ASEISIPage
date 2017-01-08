@extends('blog')

@section('content')

    <br>
 {!! Form::open(['action' => 'EventoController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data' ]) !!}
		
    @include('flash::message')		

    <div class="panel panel-primary" align="center" style="width: 1000px;margin: auto;  ">
      <div class="panel-heading">Crear Evento</div>
      <div class="panel-body" >
        <br>

        <div>
          <label>Titulo</label>
          <input type="text" class="form-control" name="Titulo" placeholder="Titulo del evento" required="">  
        </div>
        
        <div>
          <br>
          {!! form::label('fecha', 'Fecha de realizacion') !!}<br>
            
              <input type="date" class="form-control" id="datepicker" name="fecha" data-provide="datepicker" placeholder="mes/dia/año" required="true" data-date-format="yyyy-mm-dd"><br>
                  
        </div>

        <div>           
            <br>
          <label>Descripcion</label>
          <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
          
        </div>

        <div>
          <br>
          <label>Seleccione el tipo de publicacion</label>
          <p><input type="radio" name="tipo" value="1" checked="">  Evento</p>
          <p><input type="radio" name="tipo" value="0">  Publicidad</p>
        </div>

        <div style="display: none">
          <input type="text" name="user_id" value="{{Auth::user()->id}}">
        </div>

      <div>
        <br>
        <label>Seleccione las imagenes a subir</label>
         {!! form::file('imagen1[]', ['class' => 'form-control', 'multiple', 'accept'=>'.png,.jpg,.jpeg'])!!}


  <div class="panel-body">
               {!! form::submit('Guardar', ['class'=> 'btn btn-primary btn-lg' ]) !!}  
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
 