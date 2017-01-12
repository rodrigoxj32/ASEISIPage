@extends('app')

@section('content')

<input type="text" id="search" placeholder="Escribe para buscar..." />
<br>
<br>

<table id="table" class="table table-striped">
	<thead>
		<tr>
			<th><font size="5">Nombre</font></th>
			<th><font size="5">Correo</font></th>
			<th><font size="5">Tipo de Usuario</font></th>
			<th><font size="5">Eliminar</font></th>		
			
		</tr>
		
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td><font size="3">{{$user->name}}</font></td>	
				<td><font size="3">{{$user->email}}</font></td>
				@if($user->rol_id == 1)
					<td><font size="3">Administrador</font></td>
				@else
					<td><font size="3">Usuario</font></td>
				@endif
				<td width="10%"><a href=" {{route('eliminarUsuario',$user->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Eliminar</b></font></a> </td>
			</tr>
		@endforeach
		
	</tbody>
</table>

{!! $users->appends(Request::all())->render() !!}

@endsection

@section('js')
<script type="text/javascript">
	$(function () {

	  $('#search').quicksearch('table tbody tr');								
	});
</script>
@endsection('js')