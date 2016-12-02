@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Cambiar Contraseña</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> ah habido un error por favor verifique.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif				

		        {!! Form::open(['action' => 'UserController@Resetstore','class'=>'form-horizontal' ]) !!}
		         		@include('flash::message')	         		

			

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña Nueva</label>
							<div class="col-md-6">
								<input  type="password" class="form-control"  id="password" name="password" required onchange="confirmar()" pattern=".{5,20}" > 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Contraseña</label>
							<div class="col-md-6">
								<input type="password" id = "password_confirmation" class="form-control" name="password_confirmation" required onchange="confirmar()" pattern=".{5,20}" >
							</div>
						</div>

	
						<div class="col-md-6 col-md-offset-4">

						<h4  id="mensaje" name="" style="display: none; color: red;font-family:verdana;"> Las contraseñas no coinciden</h4>
						</div>					

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button id="boton" name="boton" type="submit" class="btn btn-primary" disabled="">
									Cambiar Contraseña
								</button>
							</div>
						</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
	<script type="text/javascript">
		function confirmar(){
			var password  =   document.getElementById("password_confirmation").value;	
			var password2  =   document.getElementById("password").value;

			if (password == password2) {
				document.getElementById('mensaje').style.display = 'none';
				document.getElementById('boton').disabled = false;

			}else{
				document.getElementById('mensaje').style.display = 'block';
				document.getElementById('boton').disabled = true;	
			}	

		}

		 
	</script>

@endsection('js')