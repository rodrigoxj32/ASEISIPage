@extends('blog')

@section('content')

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
                                <div class="image-box">
                                    <ul class="image-slider">
                                        <li><a href="images/resource/blog-image-1.jpg" class="lightbox-image"><img src="images/resource/blog-image-1.jpg" alt=""></a></li>
                                        <li><a href="images/resource/blog-image-2.jpg" class="lightbox-image"><img src="images/resource/blog-image-2.jpg" alt=""></a></li>
                                        <li><a href="images/resource/blog-image-3.jpg" class="lightbox-image"><img src="images/resource/blog-image-3.jpg" alt=""></a></li>
                                    </ul>
                                </div>

                            </div>
                        </article>
                        
                                           
                        
                        <!--Blog Post-->
                         @foreach($eventos as $evento)
                         @if($evento->tipo == 1)
                        <article class="blog-post">
                            <div class="post-inner">
                                
                                    <figure >
                                        <!--<img src="images/resource/blog-image-3.jpg" alt="Error en imagen"  width="500" height="300">-->
                                        
                                        <img  src="{{$evento->imagenes[0]->direccion}}" width="869" height="400"/>   

                                        
                                    </figure>
                              
                                <div class="post-header">
                                    
                                    <ul class="post-info">
                                         <li><span class="fa fa-clock-o"></span>&ensp; {{$evento->fecha_de_realizacion}}</li>
                                        <li><span class="fa fa-user"></span>&ensp; Posted by <a href="#">Admin</a></li>
                                        <li><span class="fa fa-server"></span>&ensp; <a href="#">ASEISI</a> , <a href="#"></a></li>
                                    </ul>
                                    <h2><a href="#">{{$evento->nombre_evento}}</a></h2>
                                </div>
                                <div class="post-desc">
                                    <div class="text"><p>{{$evento->descripcion_evento}}</p></div>
                                    <div class="text-right"><a href="{{route('verEvento',$evento->id)}}" class="theme-btn rounded-btn-blue">Ver imagenes</a></div>
                                    @if (Auth::guest())
                                    @else
                                        @if(Auth::user()->rol_id == 1)
                                        <div class="text-left">
                                        <a style="border-radius: 11px;border-radius: 15px;" href=" {{route('eliminarEvento',$evento->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Eliminar</b></font></a>
                                        </div>
                                        @endif
                                    @endif
                                    
                                </div>
                            </div>
                        </article>
                        
    
          
                    @endif   
                    <br>
                    @endforeach

                    {!! $eventos->appends(Request::all())->render() !!}
                    <br>
                 
                <!--Blog Post-->
                  


                    </section>

                
                    
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->	
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                    
                         
                        <!-- Popular Categories -->
                        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Popular Categories</h3></div>
                            
                            <ul class="list">
                            	<li><a class="clearfix" href="#"><span class="txt pull-left">Internet Marketing </span> <span class="count pull-right">(05)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">Search Engine Optimization</span> <span class="count pull-right">(08)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">Webdevelopement</span> <span class="count pull-right">(12)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">Creative Strategies</span> <span class="count pull-right">(33)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">Webhosting Services</span> <span class="count pull-right">(07)</span></a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images/resource/thumb-1.jpg" alt=""></a></div>
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur</a></h4>
                                <div class="post-info"><span class="icon flaticon-calendars12"></span> 11/01/2015 </div>
                            </div>
                            
                             <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images/resource/thumb-2.jpg" alt=""></a></div>
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur</a></h4>
                                <div class="post-info"><span class="icon flaticon-calendars12"></span> 11/01/2015 </div>
                            </div>
                            
                             <div class="post">
                                <div class="post-thumb"><a href="#"><img src="images/resource/thumb-3.jpg" alt=""></a></div>
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur</a></h4>
                                <div class="post-info"><span class="icon flaticon-calendars12"></span> 11/01/2015 </div>
                            </div>
                            
                        </div>
                        
                        <!-- Recent From Gallery -->
                        <div class="widget recent-gallery">
                            <div class="sidebar-title"><h3>Flicker Gallery</h3></div>
                            
                            <div class="clearfix">
                            	<figure class="image"><a href="images/resource/blog-image-1.jpg" class="lightbox-image"><img src="images/resource/thumb-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-2.jpg" class="lightbox-image"><img src="images/resource/thumb-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-3.jpg" class="lightbox-image"><img src="images/resource/thumb-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-1.jpg" class="lightbox-image"><img src="images/resource/thumb-4.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-2.jpg" class="lightbox-image"><img src="images/resource/thumb-5.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-3.jpg" class="lightbox-image"><img src="images/resource/thumb-6.jpg" alt=""></a></figure>
                            </div>
                            
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="widget popular-tags">
                            <div class="sidebar-title"><h3>Popular Tags</h3></div>
                            
                            <a href="#">Creative</a>
                            <a href="#">Media</a>
                            <a href="#">SEO</a>
                            <a href="#">Marketing</a>
                            <a href="#">Development</a>
                            <a href="#">Website</a>
                            <a href="#">Design</a>
                            
                        </div>
                                
                    </aside>
                
                    
                </div>
                <!--Sidebar-->
                
                
            </div>
        </div>
    </div>
@endsection
 