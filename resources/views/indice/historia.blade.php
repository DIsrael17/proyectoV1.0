@extends('layouts.user.master')
@foreach ( $datos as $dato )
	@section('titulo',"$dato->seccion3")
@endforeach

@section('contenido')


<div class="row ">
@foreach ($noticias as $noticia)
	<div class="col-sm-12 col-md-6">
		<article class="text-justify">
			
			
					<h1>{{$noticia->titulo}}</h1>
					<p class="text-center">{{$noticia->subtitulo}}</p>
				   <p>{{$noticia->descripcion}}</p>
			
		</article>
	</div>
	
@endforeach
			
</div>



@endsection