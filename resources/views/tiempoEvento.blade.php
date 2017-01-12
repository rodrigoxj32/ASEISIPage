@extends('blog')

@section('content')

<br><br><br>	

	<h1>Esperalo...</h1><br>
	
<article>
	<div class="clock" style="margin:2em;"></div>
	<div style="display: none">
		<input id="reloj" type="number" name="reloj" value="30">
	</div>
	<div class="message"></div>
</article>
	

<br><br><br><br><br><br>

@endsection


@section('js')
	<script type="text/javascript">
		var clock;
		var x = document.getElementById("reloj").value
		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock(x,{
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
@endsection('js')