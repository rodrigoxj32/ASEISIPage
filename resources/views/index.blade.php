<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ASEISI</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
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
                     <li class="dropdown">
                      <a style="color:black" class="dropdown-toggle" href="#" aria-expanded="false">{{ Auth::user()->name }} <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                      <ul class="dropdown-menu">
                          @if(Auth::user()->rol_id == 2)
                              <li><a href="/auth/logout">Cerrar Sesion</a></li>
                          @else
                              <li><a style="color:black " href="/reset">Cambiar Contraseña</a></li>
                              <li><a style="color:black" href="/auth/logout">Cerrar Sesion</a></li>
                          @endif
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
                        <a href="/"><img src="images/logo-1.png" alt="Aseisi"></a>
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
                                <li ><a href="/">Home</a>

                                </li>

                                <li ><a href="">Services</a>

                                </li>



                          @if (Auth::guest())
                                 <li ><a href="/publicidad">Publicidad</a>

                            @else
                                @if(Auth::user()->rol_id == 1)
                                <li class="dropdown"><a class="dropdown-toggle" href="/publicidad">Publicidad</a>
                                  <ul class="dropdown-menu">
                                    <li><a style="color:black " href="/createBlog">Crear Publicidad</a></li>

                                  </ul>
                                </li>
                                @else
                                    @if(Auth::user()->rol_id == 2)
                                    <li ><a href="/publicidad">Publicidad</a>
                                    @endif
                                @endif
                            @endif

                           @if (Auth::guest())
                                 <li ><a href="/evento">Eventos</a>

                            @else
                                @if(Auth::user()->rol_id == 1)
                                <li class="dropdown"><a class="dropdown-toggle" href="">Eventos</a>
                                  <ul class="dropdown-menu">
                                        <li><a style="color:black " href="/createBlog">Crear Evento</a></li>

                                  </ul>
                                </li>
                                @else
                                    @if(Auth::user()->rol_id == 2)
                                    <li ><a href="/evento">Eventos</a>
                                    @endif
                                @endif
                            @endif


                           @if (Auth::guest())
                                 <li ><a href="/verDocumento">Documentos</a>

                            @else
                                @if(Auth::user()->rol_id == 1)
                                <li class="dropdown"><a class="dropdown-toggle" href="/verDocumento">Documentos</a>
                                  <ul class="dropdown-menu">
                                    <li><a style="color:black " href="/crearDocumento">Agregar nuevo Documento</a></li>

                                  </ul>
                                </li>
                                @else
                                    @if(Auth::user()->rol_id == 2)
                                    <li ><a href="/verDocumento">Documentos</a>
                                    @endif
                                @endif
                            @endif


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


    <!--Main Slider-->
    <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="bold-heading">Somos ASEISI</h1></div>

                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="roman-text ">Estudiantes de Ingeniería Informática</div></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="20"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2 class="trans-heading">Nos preocupamos por nuestros futuros Ingenieros</h2></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><a class="theme-btn radial-btn" href=""><span class="txt">Adelante!</span> <span class="img-circle fa fa-arrow-right"></span></a></div>


                    </li>

                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="bold-heading">Cambiamos la forma del estudio </h1></div>

                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="roman-text orange_color">Más Simple</div></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="20"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2 class="trans-heading">Trabajando con Pasión!</h2></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><a class="theme-btn radial-btn" href=""><span class="txt">Vamos! </span> <span class="img-circle fa fa-arrow-right"></span></a></div>


                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="bold-heading">Conocimiento para todos</h1></div>

                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="roman-text text-uppercase orange_color">Software Libre</div></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="20"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2 class="trans-heading">Alta Calidad Educativa</h2></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><a class="theme-btn radial-btn" href=""><span class="txt">Vamos!</span> <span class="img-circle fa fa-arrow-right"></span></a></div>


                    </li>

                    <li data-transition="slideup" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/4.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h1 class="bold-heading">Derechos de los Estudiantes</h1></div>

                    <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="roman-text text-uppercase">Nesecidades de todos</div></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="20"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><h2 class="trans-heading">Nuestra recompensa es tu éxito!</h2></div>


                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><a class="theme-btn radial-btn" href=""><span class="txt">Vamos!</span> <span class="img-circle fa fa-arrow-right"></span></a></div>


                    </li>


                </ul>

            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>


    <!--Text Intro Section-->
    <section class="text-intro">
    	<div class="auto-container">

        	<div class="row clearfix">

                <!--Column-->
                <article class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box main-text">
                    	<h2>Somos ASEISI</h2>
                        <h2>Trabajamos <span class="color_blue">por tu progreso!</span></h2>
                    </div>
                </article>

                <!--Column-->
                <article class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	Como Asociación de Estudiantes de Ingeniería de Sistemas Informáticos velamos por que se cumplan los derechos estudiantiles de nuestros compañeros. Alta calidad educativa y herramientas para desenvolverse profesionalmente a futuro.
                    </div>
                </article>

            </div>
        </div>
    </section>



    <!--Default Section-->
    <section class="default-section connected no-padd-top">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Column-->
                <div class="column icon-column center-icon-column col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box text-center">
                    	<div class="icon img-circle bg_purple"><span class="flaticon-lightbulb23"></span></div>
                        <h3 class="montserrat-font text-uppercase">IDEAS CREATIVAS</h3>
                        <div class="text">Constantemente generando ideas novedosas para el desarrollo tecnológico de los futuros profesionales de nuestra carrera</div>
                    </div>
                </div>

                <!--Column-->
                <div class="column icon-column center-icon-column col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box text-center">
                    	<div class="icon img-circle bg_orange"><span class="flaticon-flying16"></span></div>
                        <h3 class="montserrat-font text-uppercase">FOMENTAR EL CRECIMIENTO DE CONOCIMIENTO</h3>
                        <div class="text">Inspirando a adquirir nuevas formas de pensar, y de implementar soluciones eficientes y eficaces como futuros Ingenieros.</div>
                    </div>
                </div>

                <!--Column-->
                <div class="column icon-column center-icon-column col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box text-center">
                    	<div class="icon img-circle bg_red"><span class="flaticon-network3"></span></div>
                        <h3 class="montserrat-font text-uppercase">TRABAJO EN EQUIPO</h3>
                        <div class="text">Cercano a nuestros compañeros con la idea de compartir conocimiento, teniendo en cuenta que las grandes cosas se logran trabajando en equipo.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Default Section / Background Waves-->
    <section class="default-section bg-waves bg-color outside-hidden" style="background-image:url(images/background/bg-waves-2.png); ">
    	<div class="auto-container">

        	<div class="sec-title text-center main-title">
                <h2 class="default-title text-uppercase">NOTICIAS</h2>
                <div class="theme-subtitle">ASEISI día a día</div>
            </div>

        	<div class="row clearfix">

                <!--Column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                	<!--Featured Icon Column-->
                    <article class="featured-icon-column">
                        <div class="inner-box">
                            <h3><span class="icon img-circle"><span class="flaticon-thumb3"></span></span> Stet clita ea et gubergren, kasd magna no rebum</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                            </div>
                        </div>
                    </article>

                    <!--Featured Icon Column-->
                    <article class="featured-icon-column">
                        <div class="inner-box">
                            <h3><span class="icon img-circle"><span class="flaticon-pin60"></span></span> Ut wisi enim ad minim veniam, quis nostrud exerci tation</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                            </div>
                        </div>
                    </article>

                    <!--Featured Icon Column-->
                    <article class="featured-icon-column">
                        <div class="inner-box">
                            <h3><span class="icon img-circle"><span class="flaticon-tool305"></span></span> Duis autem vel eum iriure dolor in hendrerit in vulputate veli</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                            </div>
                        </div>
                    </article>

                </div>

                <!--Column / Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                	<figure class="fluid-image-outer"><img src="images/resource/dashboard-image-1.jpg" alt="News"></figure>
                </div>


            </div>
        </div>
    </section>


    <!--Circular Section
    <section class="circular-section outside-hidden">

    	<div class="sec-title text-center main-title">
            <h2 class="default-title text-uppercase">check our competence</h2>
            <div class="theme-subtitle">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
        </div>-->

        <!--Circular Outer
    	<div class="circular-outer">
        	<div class="inner-container">
            	-->
                <!--Featured Box-
                <article class="featured-box one icon-center">
                    <div class="inner-box">
                        <h3> High Performance</h3>
                        <div class="text">
                            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        </div>
                        <div class="icon img-circle bg_blue"><span class="flaticon-cogwheels10"></span></div>
                    </div>
                </article>

                <!--Featured Box-
                <article class="featured-box two icon-right">
                    <div class="inner-box">
                        <h3><span class="icon img-circle bg_orange"><span class="flaticon-camera33"></span></span> Pixel Perfection</h3>
                        <div class="text">
                            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        </div>
                    </div>
                </article>

                <!--Featured Box-
                <article class="featured-box three icon-left">
                    <div class="inner-box">
                        <h3><span class="icon img-circle bg_purple"><span class="flaticon-communication38"></span></span> Simple Connections</h3>
                        <div class="text">
                            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        </div>
                    </div>
                </article>

                <!--Featured Box-
                <article class="featured-box four icon-right">
                    <div class="inner-box">
                        <h3><span class="icon img-circle bg_green"><span class="flaticon-diamond24"></span></span> Quality Standards</h3>
                        <div class="text">
                            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        </div>
                    </div>
                </article>

                <!--Featured Box->
                <article class="featured-box five icon-left">
                    <div class="inner-box">
                        <h3><span class="icon img-circle bg_red"><span class="flaticon-share55"></span></span> Social Network</h3>
                        <div class="text">
                            <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
                        </div>
                    </div>
                </article>

                <!--Logo->
            	<div class="logo"><a href="#"><img src="images/circular-logo-1.png" alt=""></a></div>

            </div>
        </div>

    </section>



    <!--Parallax Section->
    <section class="parallax-section" style="background-image:url(images/parallax/image-3.jpg);">
    	<div class="auto-container">

            <h2>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse</h2>
            <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
            <a class="theme-btn radial-btn bg_red" href="#"><span class="txt">Get Started Now</span> <span class="img-circle fa fa-arrow-right"></span></a>

        </div>
    </section>


    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">

        	<div class="row clearfix">

                <!--Column-->
                <div class="column text-column col-lg-4 col-md-6 col-xs-12">

                    <h2 class="default-title text-uppercase">Our philosophy</h2>
                	<div class="line-left"></div>

                    <div class="text">
                    	<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus es.</p>
						<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam.</p>
                    </div>
                </div>

                <!--Column-->
                <div class="column text-column col-lg-4 col-md-6 col-xs-12">

                    <h2 class="default-title text-uppercase">What we do</h2>
                	<div class="line-left"></div>

                    <!-- Accordion Box -->
                    <div class="accordion-box style-two">

                        <!-- Accordion -->
                        <article class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn active">Stet clita ea et gubergren, kasd magna <div class="toggle-icon"><span class="plus flaticon-add30"></span><span class="minus flaticon-minus42"></span></div></div>
                            <div class="acc-content collapsed">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed.</p>
                            </div>
                        </article>

                        <!-- Accordion -->
                        <article class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">Consetetur sadipscing elitr, sed diam<div class="toggle-icon"><span class="plus flaticon-add30"></span><span class="minus flaticon-minus42"></span></div></div>
                            <div class="acc-content">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed.</p>
                            </div>
                        </article>

                        <!-- Accordion -->
                        <article class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn">Dolore magna aliquyam erat individum  <div class="toggle-icon"><span class="plus flaticon-add30"></span><span class="minus flaticon-minus42"></span></div></div>
                            <div class="acc-content">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed.</p>
                            </div>
                        </article>

                    </div>



                </div>

                <!--Column-->
                <div class="column text-column col-lg-4 col-md-6 col-xs-12">

                    <h2 class="default-title text-uppercase">Our Experiences</h2>
                	<div class="line-left"></div>

                    <!--Progress Levels-->
                    <div class="progress-levels medium-size">

                        <!--Skill Box-->
                        <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="box-title">social marketng</div>
                            <div class="inner">
                                <div class="bar">
                                    <div class="bar-innner"><div class="bar-fill" data-percent="80"><div class="percent"></div></div></div>

                                </div>
                            </div>
                        </div>

                        <!--Skill Box-->
                        <div class="progress-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="box-title">seo &amp; KEYWORD RESEARCH</div>
                            <div class="inner">
                                <div class="bar">
                                    <div class="bar-innner"><div class="bar-fill" data-percent="90"><div class="percent"></div></div></div>

                                </div>
                            </div>
                        </div>

                        <!--Skill Box-->
                        <div class="progress-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="box-title">WEB DEVELOPEMENT</div>
                            <div class="inner">
                                <div class="bar">
                                    <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>

                                </div>
                            </div>
                        </div>

                        <!--Skill Box-->
                        <div class="progress-box wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="box-title">WORDPRESS CUSTOMIZATION</div>
                            <div class="inner">
                                <div class="bar">
                                    <div class="bar-innner"><div class="bar-fill" data-percent="88"><div class="percent"></div></div></div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </section>


    <!--Team Section-->
    <section class="team-section text-center no-padd-top">
    	<div class="auto-container">

        	<div class="sec-title main-title">
                <h2 class="default-title text-uppercase">Meet Our Team</h2>
                <div class="theme-subtitle">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
            </div>

        	<div class="row clearfix">

                <!--Team Member-->
                <article class="team-member col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image">
                            <img src="images/resource/team-1.jpg" alt="">
                            <div class="hover-info">
                            	<!--Plus Icon-->
                            	<a href="#" class="icon-plus"><span class="flaticon-plus3"></span></a>

                                <div class="text">We have the expertise to create just the right web presence for you.</div>
                                <div class="social-links">
                        			<a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                </div>
                            </div>
                        </figure>

                        <div class="member-info">
                        	<h3>Nashid Martines</h3>
                            <h4>Creative Director</h4>
                        </div>

                    </div>
                </article>

                <!--Team Member-->
                <article class="team-member col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image">
                            <img src="images/resource/team-2.jpg" alt="">
                            <div class="hover-info">
                            	<!--Plus Icon-->
                            	<a href="#" class="icon-plus"><span class="flaticon-plus3"></span></a>

                                <div class="text">We have the expertise to create just the right web presence for you.</div>
                                <div class="social-links">
                        			<a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                </div>
                            </div>
                        </figure>

                        <div class="member-info">
                        	<h3>Jackson Willingham</h3>
                            <h4>Front-end Developer</h4>
                        </div>

                    </div>
                </article>

                <!--Team Member-->
                <article class="team-member col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <figure class="image">
                            <img src="images/resource/team-3.jpg" alt="">
                            <div class="hover-info">
                            	<!--Plus Icon-->
                            	<a href="#" class="icon-plus"><span class="flaticon-plus3"></span></a>

                                <div class="text">We have the expertise to create just the right web presence for you.</div>
                                <div class="social-links">
                        			<a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-instagram"></span></a>
                                </div>
                            </div>
                        </figure>

                        <div class="member-info">
                        	<h3>Yvonne Backfield</h3>
                            <h4>Marketing Manager</h4>
                        </div>

                    </div>
                </article>


            </div>
        </div>
    </section>


    <!-- Client Testimonials -->
    <section class="client-testimonials style-one">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title main-title text-center">
                <h2 class="default-title white_color">CLIENT TESTIMONIALS</h2>
                <div class="line-centered"></div>
            </div>

        	<div class="testimonial-slider-full">
            	<article class="slide">
                    <div class="text">“Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this industry and that’s what you want from an advertising agency, not someone who is relying on the same way of doing things that worked 10 years, 5 years or even a year ago.”</div>
                    <div class="author-info">Jonathan Doe <div class="time">2 days ago</div></div>
                </article>
                <article class="slide">
                    <div class="text">"Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat et accusam et justo duo dolores et ea rebum."</div>
                    <div class="author-info">Hamzah Ali <div class="time">2 days ago</div></div>
                </article>
                <article class="slide">
                    <div class="text">"Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren "</div>
                    <div class="author-info">Aamir Denna <div class="time">2 days ago</div></div>
                </article>
            </div>

        </div>
    </section>


    <!-- Client Logos -->
    <section class="logos-section" style="background-image:url(images/background/logos-bg.jpg);">
    	<div class="auto-container">

        	<div class="text-center">
            	<a href="#" class="image-box"><img src="images/clients/logo-1.png" alt="" ></a>
                <a href="#" class="image-box"><img src="images/clients/logo-2.png" alt=""></a>
                <a href="#" class="image-box"><img src="images/clients/logo-3.png" alt=""></a>
                <a href="#" class="image-box"><img src="images/clients/logo-4.png" alt=""></a>
                <a href="#" class="image-box"><img src="images/clients/logo-5.png" alt=""></a>
            </div>

        </div>
    </section>



    <!--Main Footer-->
    <footer class="main-footer">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                	<div class="col-lg-4 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About Us</h2>
                            <div class="text">
                            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea.</p>
                            </div>

                            <div class="social-links">
                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-dribbble"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </div>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-4 col-sm-6 col-xs-12 column">
                    	<h2>Quick Links</h2>
                    	<div class="row clearfix">

                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="#">Our Company</a></li>
                                        <li><a href="#">Our Philosophy</a></li>
                                        <li><a href="#">Monthly Statistics</a></li>
                                        <li><a href="#">Marketing Strategies</a></li>
                                        <li><a href="#">Our Services</a></li>
                                    </ul>

                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="#">Support Forums</a></li>
                                        <li><a href="#">FAQ &amp; Help Center</a></li>
                                        <li><a href="#">Register an account</a></li>
                                        <li><a href="#">Login with account</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-4 col-sm-12 col-xs-12 column">
                        <div class="footer-widget newsletter-widget">
                            <h2>Subscribe Newsletter</h2>
                            <form method="post" action="/Documentos">
                            	<div class="form-group">
                                	<input type="text" name="username" value="" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group">
                                	<input type="text" name="useremail" value="" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                	<button type="submit" class="theme-btn radial-btn bg_orange"><span class="txt">Subscribe Now</span> <span class="img-circle fa fa-arrow-right"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>

                <!--Contact Info-->
                <div class="contact-info">
                	<ul>
                    	<li><span class="bullet">&bull;</span> 78 Fashion Street, Beverly Hill</li>
                        <li><span class="bullet">&bull;</span> Abony, NYC 12041</li>
                        <li><span class="bullet">&bull;</span> Phone: (800) 0123 4567 890</li>
                        <li><span class="bullet">&bull;</span> E-mail:  radium@envato.com</li>

                    </ul>
                </div>

            </div>
        </div>

        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container clearfix">
            	<div class="logo pull-left"><a href="#"><img src="images/logo-2.jpg" alt=""></a></div>
                <!--Copyright-->
                <div class="copyright pull-right">Copyright 2017 &copy; <strong>Radium - Marketing &amp; SEO PSD Template</strong> | All Rights Reservedd</div>
            </div>
        </div>

    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>
