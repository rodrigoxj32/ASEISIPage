@extends('blog')

@section('content')


	@foreach($eventos as $evento)
		<br><br><br>	

			<h1>{{$evento->nombre_tiempo}}</h1><br>
			
		<article>
			<div class="{{$evento->fecha_de_realizacion_tiempo}}" style="margin:2em;"></div>

		    <div class="form-group">
	            
	            <div class="col-sm-10">
	                <textarea readonly rows="2" cols="20" class="form-control" name="Descripcion" maxlength="250">{{$evento->descripcion_tiempo}}</textarea>
	            </div>
        </div>
			<div class="message"></div>
		</article>

		<div style="display: none">
			<input id="{{$evento->fecha_de_realizacion_tiempo}}" type="number" name="reloj" value="{{$evento->fecha_de_realizacion_tiempo}}">
		</div>
			

		<br><br><br><br><br><br>
	@endforeach
{!! $eventos->appends(Request::all())->render() !!}
@endsection


@section('js')

@foreach($eventos as $evento)
	<script type="text/javascript">
		var clock;
		var x = document.getElementById("{{$evento->fecha_de_realizacion_tiempo}}").value
		$(document).ready(function() {
			var clock;

			clock = $('.{{$evento->fecha_de_realizacion_tiempo}}').FlipClock({{$evento->fecha_de_realizacion_tiempo}},{
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