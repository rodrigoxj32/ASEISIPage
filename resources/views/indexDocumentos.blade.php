@extends('blog')

@section('content')


<table class="table">
	<thead>
		<tr>
			<th><font size="5">Link</font></th>
			<th><font size="5">Nombre</font></th>
			<th><font size="5">Descripcion</font></th>
			@if (Auth::guest())
			@else
				@if(Auth::user()->rol_id == 1)
					<th> <font size="5">Eliminar</font> </th>
				@endif
			@endif
		</tr>
	</thead>
	<tbody>
		@foreach($documentos as $documento)

				<tr>
					<td ><a href="{{$documento->direccion_documento}}" target="_blank"><img src="images/documento.png" alt="Aseisi" ></a></td>
					<td><font size="4">{{$documento->nombre_documento}}</font> </td>
					<td><font size="4">{{$documento->descripcion_documento}}</font> </td>
					@if (Auth::guest())
					@else
						@if(Auth::user()->rol_id == 1)
							<td width="10%">

							<a href=" {{route('editarDocumento',$documento->id)}}" onclick="return confirm('¿Seguro que deseas Editar?')" class="btn btn-warning"><font color="black" size="2"> <b>Editar</b></font></a> 

							&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
							<a href=" {{route('eliminarDocumento',$documento->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Eliminar</b></font></a> 

							
							

							</td>
						@endif
					@endif      					
				</tr>

			<br>
		@endforeach

		
	</tbody>
</table>

{!! $documentos->appends(Request::all())->render() !!}
@endsection