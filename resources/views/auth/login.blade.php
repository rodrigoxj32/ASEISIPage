@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" style="box-shadow: 15px 15px 5px #22313F;">
				<div class="panel-heading" style="background-color:#19B5FE;font-family:fantasy;font-size:1cm; color:white;">LOGIN</div>
				<div class="panel-body" style="background-color:white;">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							Por favor corrige los siguientes errores:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action=" {{route ('login')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.email') }}</label>
							<div class="col-md-6">
							    {!! Form::text('email', null, ['class' => 'form-control', 'type' => 'email']) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('validation.attributes.password') }}</label>
							<div class="col-md-6">
						    	{!! Form::password('password', ['class' => 'form-control']) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-default" style="width:3cm;background-color:#19B5FE;color:white;">
									Login
								</button>
								<a class="btn btn-default" style="width:3cm;background-color:#19B5FE;color:white;" href="{{route('facebook.login')}}">
                  Facebook
        				</a>
								<a class="btn btn-default" style="width:3cm;background-color:#19B5FE;color:white;" href="{{route('google.login')}}">
                  Google
                </a>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
