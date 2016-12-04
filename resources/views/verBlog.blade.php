@extends('blog')

@section('content')


<br>

    <!--Sidebar Page-->
   
     <div class="sidebar-page scroll-to-this">
    	<div class="auto-container">
        	<div class="row clearfix">
            
                <!--Content Side-->	
                <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                    <section class="blog-container">
                                              
                                           
                        
                        <!--Blog Post-->
                        <article class="blog-post">
                            <div class="post-inner">
                                
                                    <figure >
                                        <!--<img src="images/resource/blog-image-3.jpg" alt="Error en imagen"  width="500" height="300">-->
                                        
                                        <img  src="{{$eventos[0]->imagenes[0]->direccion}}" width="869" height="400"/>   

                                        
                                    </figure>
                              
                                <div class="post-header">
                                    
                                    <ul class="post-info">
                                         <li><span class="fa fa-clock-o"></span>&ensp; {{$eventos[0]->fecha_de_realizacion}}</li>
                                    </ul>
                                    <h2><a href="#">{{$eventos[0]->nombre_evento}}</a></h2>
                                </div>
                                <div class="post-desc">
                                    <div class="text"><p>{{$eventos[0]->descripcion_evento}}</p></div>
                                    @foreach($eventos as $evento)
						         		@foreach($evento->imagenes as $imagen)
						                 &nbsp&nbsp&nbsp
						               	<img src="{{$imagen->direccion}}" width="200" height="100" onclick="document.getElementById('imagen_a_mostar').src='{{$imagen->direccion}} ' "  "  style="border-width: 10px;border-style: outset; border-color: blue;"></img>
						               @endforeach
						            @endforeach
	                            </div>
                            </div>
                        </article>
                        
                <!--Blog Post-->
                  
                    </section>

                </div>
                <!--Content Side-->
                
            </div>
        </div>
    </div>

     <div class="sidebar-page scroll-to-this">
    	<div class="auto-container">
        	<div class="row clearfix">


<div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
          <label>Comentarios</label>
          <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
</div>
</div>
</div>
</div>



@endsection