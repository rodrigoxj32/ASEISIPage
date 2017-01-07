@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Actualizar</div>
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

		        {!! Form::open(['action' => 'UserController@store','class'=>'form-horizontal' ]) !!}
		         		@include('flash::message')
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input  type="password" class="form-control"  id="password" name="password" required onchange="confirmar()"> 
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Password</label>
							<div class="col-md-6">
								<input type="password" id = "password_confirmation" class="form-control" name="password_confirmation" required onchange="confirmar()">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Rol</label>
							<div class="col-md-6">
							 
	            			{!! Form::select('rol_id', $roles, null, ['class' => 'form-control ', 'placeholder'=> 'Seleccione una materia', 'required']) !!}						
							</div>
							
						</div>

						<div class="col-md-6 col-md-offset-4">

							<h4  id="mensaje" name="" style="display: block; color: red;font-family:verdana;"> Las contraseñas no coinciden</h4>
						</div>

						<div id="boton" class="form-group" style="display: none;" >
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
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
				document.getElementById('boton').style.display = 'block';

			}else{
				document.getElementById('mensaje').style.display = 'block';
				document.getElementById('boton').style.display = 'none';
			}	

		}

		 
	</script>

@endsection('js')