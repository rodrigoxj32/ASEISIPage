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
                                        <li class="dropdown"><a class="dropdown-toggle" href="/evento">Eventos</a>
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
                                        <li ><a href="/tiempo">Futuros Eventos</a>

                                            @else
                                                @if(Auth::user()->rol_id == 1)
                                                     <li class="dropdown"><a class="dropdown-toggle" href="/tiempo">Futuros Eventos</a>
                                                         <ul class="dropdown-menu">
                                                             <li><a style="color:black " href="/createTiempo">Crear Evento Futuro</a></li>

                                                        </ul>
                                                    </li>
                                                @else
                                                    @if(Auth::user()->rol_id == 2)
                                                        <li ><a href="/tiempo">Futuros Eventos</a>
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
                                                <li><a style="color:black " href="/verUsuarios">Ver Usuarios</a></li>
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
                        <h2 class="default-title text-uppercase">Nuestra labor</h2>
                        <div class="theme-subtitle">ASEISI día a día</div>
                    </div>

                    <div class="row clearfix">

                        <!--Column-->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <!--Featured Icon Column-->
                            <article class="featured-icon-column">
                                <div class="inner-box">
                                    <h3><span class="icon img-circle"><span class="flaticon-thumb3"></span></span>Ayudar</h3>
                                    <div class="text">
                                        <p>Buscamos ayudar al crecimiento de la carrera de ingenieria de sistemas informaticos.</p>
                                    </div>
                                </div>
                            </article>

                            <!--Featured Icon Column-->
                            <article class="featured-icon-column">
                                <div class="inner-box">
                                    <h3><span class="icon img-circle"><span class="flaticon-pin60"></span></span> EncuentranosS</h3>
                                    <div class="text">
                                        <p>Puedes acercarte al local de ASEISI y siempre te ayudaremos con tus dudas ya sea sobre temas, academicos, administrativos o afines a la informatica</p>
                                    </div>
                                </div>
                            </article>

                            <!--Featured Icon Column-->
                            <article class="featured-icon-column">
                                <div class="inner-box">
                                    <h3><span class="icon img-circle"><span class="flaticon-tool305"></span></span> Talleres,Cursos</h3>
                                    <div class="text">
                                        <p>Como ASEISI sabemos que la carrera de Ingenieria de Sistemas Informaticos, cambia dia a dia y por eso ofrecemos cursos para poder solventar las necesidades de conocimiento que tienen los estudiantes.</p>
                                    </div>
                                </div>
                            </article>

                        </div>


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

                            </div>




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
