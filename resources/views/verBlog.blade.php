@extends('blog')

@section('content')

{!! Form::open(['action' => 'ComentarioController@store' ,'class'=>'form-horizontal','enctype'=>'multipart/form-data' ]) !!}

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

                                <img id="imagen_a_mostar" src="{{$eventos[0]->imagenes[0]->direccion}}" width="869" height="400"/>   


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
                                <img src="{{$imagen->direccion}}" width="200" height="100" onclick="document.getElementById('imagen_a_mostar').src ='{{$imagen->direccion}} ' "  "  style="border-width: 10px;border-style: outset; border-color: blue;"></img>
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


@if (Auth::guest())

@else
@if(Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2)
<div class="sidebar-page scroll-to-this">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                <label>Comentarios</label>
                <textarea rows="4" cols="50" class="form-control" name="Descripcion" maxlength="250"></textarea>
            </div>
            <br>

            <div style="display: none">
                <input type="text" name="user_id" value="{{Auth::user()->id}}">
                <input type="text" name="evento_id" value="{{$eventos[0]->id}}">
            </div>			

        </div>
        <div class="panel-body">
            {!! form::submit('Guardar', ['class'=> 'btn btn-primary btn-lg' ]) !!}  
        </div>

    </div>
</div>
@endif
@endif

<table class="table">
    <thead>
        <tr>
            <th width="20%"> <font size="5">Nombre</font> </th>
            <th> <font size="5">Comentarios</font> </th>
            @if (Auth::guest())
            @else
            @if(Auth::user()->rol_id == 1)
            <th> <font size="5">Eliminar</font> </th>
            @endif
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($comentarios as $comen)
        @foreach($comen->user as $co)

        <tr>
            <td ><font size="3"> <B>{{$co->name}}</B></font></td>
            <td><font size="4">{{$comen->opinion}}</font> </td>
            @if (Auth::guest())
            @else
            @if(Auth::user()->rol_id == 1)
            <td width="10%"><a href=" {{route('eliminarComentario',$comen->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Eliminar</b></font></a> </td>
            @endif
            @endif      					
        </tr>




    <br>
    @endforeach

    @endforeach
    </tbody>
</table>


{!! Form::close() !!}


@endsection