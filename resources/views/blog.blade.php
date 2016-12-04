<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ASEISI | Eventos</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css">




</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
     <!-- Main Header -->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container clearfix">
                <!-- Top Left -->
                <div class="top-left">
                    <ul class="clearfix">
                        <li><a href="#">Bienvenidos a la página oficial de la Asociación de Estudiantes de Ingeniería de Sistemas Informáticos</a></li>
                        
                    </ul>
                </div>
                
                <!-- Top Right -->
                <div class="top-right">
                    <!--Social Links Style One-->
                    <div class="social-links-one clearfix">
                        <a href="https://www.facebook.com/ASEISIUES" target="_blank" class="facebook"><span class="fa fa-facebook-f"></span></a>
                        <!--<a href="#" target="_blank" class="fa-google-plus"><span class="fa fa-google-plus"></span></a>-->
                    </div>
                    @if (Auth::guest())
                        <a style="color:black" href="login">Iniciar Sesion</a> 
                        
                    @else
                    <ul class="navigation">
                     <li class="dropdown"><a style="color:black" class="dropdown-toggle" href="#" aria-expanded="false">{{ Auth::user()->name }} <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                            <ul class="dropdown-menu">
                
                                <li><a style="color:black " href="/reset">Cambiar Contraseña</a></li>
                                <li><a style="color:black" href="/auth/logout">Cerrar Sesion</a></li>
                    
                            </ul>
                    </li>
                    </ul>
                    @endif
                </div>
                
                
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container clearfix">
                
                <!--Outer Box-->
                <div class="outer-box">
                
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="images/logo-1.png" alt="Aseisi"></a>
                     </div>
                     
                     <!--Search Box
                    <div class="search-box">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search">
                                <button type="submit"><span class="icon flaticon-right11"></span></button>
                            </div>
                        </form>
                    </div>
                    -->
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                                <li ><a href="/home">Home</a>
                                  
                                </li>
                                <li ><a href="about-2.html">About</a>
                                   
                                </li>
                                <li ><a href="services-1.html">Services</a>
                                   
                                </li>
                               
                                    
                              
                            @if (Auth::guest())
                                 <li ><a href="/evento">Eventos</a>
                              
                            @else
                                @if(Auth::user()->rol_id == 1)
                                <li class="dropdown"><a class="dropdown-toggle" href="">Eventos</a>
                                  <ul class="dropdown-menu">
                                    <li ><a href="/evento">Eventos</a>
                                    <li><a style="color:black " href="/createBlog">Crear Evento</a></li>
                                    
                                  </ul>
                                </li>
                                @endif
                            @endif 
                                
                                <li><a href="contact.html">Trámites</a></li>
                            @if (Auth::guest())

                              
                            @else
                                @if(Auth::user()->rol_id == 1)
                                <li class="dropdown"><a class="dropdown-toggle" href="#">Usuarios</a>
                                  <ul class="dropdown-menu">
                
                                    <li><a style="color:black " href="/register">Registrar</a></li>
                                    <li><a style="color:black " href="/reset">Cambiar Contraseña</a></li>
                                  </ul>
                                </li>
                                @endif
                            @endif                                
                                
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div><!-- Header Lower End-->
        
    </header><!--End Main Header -->
    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="sec-title">
                <h1>Our Blog</h1>
                <div class="page-subtitle">Eventos </div>
            </div>
        </div>
        <!--Down Arrow-->
        <
    </section>
    
    <section>
        <!--CODIGO DE TODA LA LOGICA -->
            @yield('content')
        <!--CODIGO DE TODA LA LOGICA -->
        
    </section>

    <br>
  <footer class="main-footer">
        
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                </div>
                
                <!--Contact Info-->                
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container clearfix">
                <div class="logo pull-left"><a href="#"><img src="images/logo-2.jpg" alt=""></a></div>
                <!--Copyright-->
                <div class="copyright pull-right">Copyright 2015 &copy; <strong>Radium - Marketing &amp; SEO PSD Template</strong> | All Rights Reservedd</div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>   

@yield('js')
</body>
</html>
