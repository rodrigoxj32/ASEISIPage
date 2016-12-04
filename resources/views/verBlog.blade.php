@extends('blog')

@section('content')


<br>
<div style="display:inline-block;margin: auto;">

  

	<article class="blog-post"  >
	    <div class="post-inner" id="galeria">
	    
	        <figure >
	            <div id="galeria_base">
	              <img src="{{$eventos[0]->imagenes[0]->direccion}}" width="869" height="400" id="imagen_a_mostar">
	            </div>

	            <div id="galeria_miniatura">
	                
	         	@foreach($eventos as $evento)
	         		@foreach($evento->imagenes as $imagen)
	                 &nbsp&nbsp&nbsp
	               	<img src="{{$imagen->direccion}}" width="200" height="100" onclick="document.getElementById('imagen_a_mostar').src='{{$imagen->direccion}} ' "  "  style="border-width: 10px;border-style: outset; border-color: blue;"></img>
	               @endforeach
	            @endforeach
	            </div>
	              
	        </figure>
	  
	        <div class="post-header">
	        </div>

	    </div>
	</article> 
	
</div>



@endsection