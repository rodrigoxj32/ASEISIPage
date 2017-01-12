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
                    @foreach($eventos as $evento)
                    @if($evento->tipo == 1)
                    <article class="blog-post">
                        <div class="post-inner">

                            <figure >

                                <img  src="{{$evento->imagenes[0]->direccion}}" class="img-responsive"/>   

                            </figure>

                            <div class="post-header">

                                <ul class="post-info">
                                    <li><span class="fa fa-clock-o"></span>&ensp; {{$evento->fecha_de_realizacion}}</li>
                                    <li><span class="fa fa-user"></span>&ensp; Posted by <a ></a>{{$evento->user->name}}</li>
                                    <li><span class="fa fa-server"></span>&ensp; <a >ASEISI</a> , <a href="#"></a></li>
                                </ul>

                                <h2><a href="#">{{$evento->nombre_evento}}</a></h2>
                            </div>
                            <div class="post-desc">
                                <div class="text"><p>{{$evento->descripcion_evento}}</p></div>
                                <div class="text-left"><a href="{{route('verEvento',$evento->id)}}" class="theme-btn rounded-btn-blue">Ver imagenes</a></div><br>
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
 
            <!--Sidebar-->


        </div>
    </div>
</div>
@endsection
