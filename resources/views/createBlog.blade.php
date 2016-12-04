@extends('blog')

@section('content')

    <br>
 {!! Form::open(['action' => 'EventoController@store','class'=>'form-horizontal','enctype'=>'multipart/form-data' ]) !!}
				

    <div class="panel panel-primary" align="center" style="width: 1000px;margin: auto;  ">
      <div class="panel-heading">Crear Evento</div>
      <div class="panel-body" >
        <br>

        <div>
          <label>Titulo del evento</label>
          <input type="text" class="form-control" name="Titulo" placeholder="Titulo del evento" required="">  
        </div>
        
        <div>
          <br>
          {!! form::label('fecha', 'Fecha de evento') !!}<br>
            
              <input type="date" class="form-control" id="datepicker" name="fecha" data-provide="datepicker" placeholder="mes/dia/año" required="true" data-date-format="yyyy-mm-dd"><br>
                  
        </div>

        <div>           
            <br>
          <label>Descripcion del evento</label>
          <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
          
        </div>



      <div>
        <br>
        <label>Seleccione las imagenes a subir</label>
         {!! form::file('imagen1', ['class' => 'form-control'])!!}
      </div>

        <br>
        <input type="submit" name="">
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
 