@extends('blog')

@section('content')


	@foreach($eventos as $evento)
		<br><br><br>	

			<h1>{{$evento->nombre_tiempo}}</h1><br>
			
		<article >
			<div  align="center" class="{{$evento->id}}" style="margin:2em;"></div>

		 <div class="form-group" align="center">
	            
		    <div class="col-sm-10">
		        <textarea readonly rows="2" cols="20" class="form-control" name="Descripcion" maxlength="250">{{$evento->descripcion_tiempo}}</textarea>
		    </div>
        </div>


		<div class="form-group">
		@if (Auth::guest())
        @else
            @if(Auth::user()->rol_id == 1)	
		
        <a href=" {{route('editarTiempo',$evento->id)}}" onclick="return confirm('¿Seguro que deseas Editar?')" class="btn btn-warning"><font color="black" size="2"> <b>Editar</b></font></a> 

               
        <a href=" {{route('eliminarTiempo',$evento->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Eliminar</b></font></a> 
        </div>
			
		</article>

		<div class="message"></div>

		<div style="display: none">
			<input id="{{$evento->fecha_de_realizacion_tiempo}}" type="number" name="reloj" value="{{$evento->fecha_de_realizacion_tiempo}}">
		</div>
			@endif
		@endif

		<br><br><br><br><br><br>
	@endforeach
{!! $eventos->appends(Request::all())->render() !!}
@endsection


@section('js')

@foreach($eventos as $evento)
	<script type="text/javascript">
		var clock;
		$(document).ready(function() {
			var clock;

			clock = $('.{{$evento->id}}').FlipClock({{$evento->fecha_de_realizacion_tiempo}},{
		        clockFace: 'DailyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('finalizo')
		        	}
		        }
		    });

			
		    clock.setCountdown(true);
		    clock.start();

		});
	</script>
@endforeach
@endsection('js')