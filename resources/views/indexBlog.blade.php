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
                        <article class="blog-post">
                            <div class="post-inner">
                                
                                    <figure >
                                        <!--<img src="images/resource/blog-image-3.jpg" alt="Error en imagen"  width="500" height="300">-->
                                        <img onclick="javascript:this.width=869;this.height=400" ondblclick="javascript:this.width=1024;this.height=727" src="images/resource/blog-image-3.jpg" width="869" height="400"/>   
                                    </figure>
                              
                                <div class="post-header">
                                    
                                    <ul class="post-info">
                                         <li><span class="fa fa-clock-o"></span>&ensp; 30 may 2015</li>
                                        <li><span class="fa fa-user"></span>&ensp; Posted by <a href="#">Admin</a></li>
                                        <li><span class="fa fa-server"></span>&ensp; <a href="#">Marketing</a> , <a href="#">SEO</a></li>
                                    </ul>
                                    <h2><a href="#">Titulo del evento</a></h2>
                                </div>
                                <div class="post-desc">
                                    <div class="text"><p>Aca va la desscripcion del evento</p></div>
                                    <div class="text-right"><a href="#" class="theme-btn rounded-btn-blue">Read More</a></div>
                                </div>
                            </div>
                        </article>
                        
    
          
                    
                    <br>

                 
                <!--Blog Post-->
                        <article class="blog-post">
                            <div class="post-inner" id="galeria">
                            
                                <figure >
                                    <div id="galeria_base">
                                      <img src="images/resource/blog-image-3.jpg" width="869" height="400" id="imagen_a_mostar">
                                    </div>

                                    <div id="galeria_miniatura">
                                        
                                    @for($i=0;$i<12;$i++)
                                         &nbsp&nbsp&nbsp
                                       <img src="images/resource/blog-image-2.jpg" width="200" height="100" onclick="document.getElementById('imagen_a_mostar').src='images/resource/blog-image-2.jpg' "  "  style="border-width: 10px;border-style: outset; border-color: blue;"></img>

                                   @endfor


                                  


                                    </div>
                                      
                                </figure>
                          
                                <div class="post-header">
                                </div>
                       
                            </div>
                        </article>                   


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
 