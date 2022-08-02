@extends('layouts.user.master')
	@section('titulo',"Inicio")
@section('contenido')

{{-- <h1> consigue lo nuevo aqui </h1> --}}
<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Carousel indicators -->
		    <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		        <li data-target="#myCarousel" data-slide-to="3"></li>
		        <li data-target="#myCarousel" data-slide-to="4"></li>
		    </ol>   
		    <!-- Wrapper for carousel items -->
		    
		    @foreach ($carousels as $carousel)
		    <div class="carousel-inner tamaño" title="Imagenes">
		        <div class="item active">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img1) }} " alt="First Slide" class="col col-sm-8 col-sm-offset-2 tamaño">
		        </div>
		        <div class="item">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img2 )}} " alt="Second Slide" class="col col-sm-8  col-sm-offset-2 tamaño">
		        </div>
		        <div class="item">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img3) }} " alt="Third Slide" class="col col-sm-8 col-sm-offset-2 tamaño">
		        </div>
		        <div class="item">

		            <img src=" {{ asset('img/tattoo/'.$carousel->img4)}} " alt="fourth Slide" class="col col-sm-8 col-sm-offset-2 tamaño">
		        </div>
		        <div class="item">
		            <img src=" {{ asset('img/tattoo/'.$carousel->img5)}} " alt="fifth Slide" class="col col-sm-8 col-sm-offset-2 tamaño">
		          </div>
		    </div>
		    @endforeach
		    
		</div>

</div>

<section>
	<p>¿Qué es un tattoo?</p>
	<p>Un tatuaje es un tipo de creación artística que sigue en el cuerpo de forma permanente. El diseño se hace perforando la piel con agujas e inyectando tinta, tintes y pigmentos en la capa más profunda de la piel.

Los tatuajes solían hacerse a mano, es decir, el artista encargado de hacer el tatuaje pinchaba la piel con una aguja e inyectaba la tinta manualmente. Aunque este procedimiento se sigue utilizando en algunas partes del mundo, la mayoría de los profesionales del tatuaje utilizan máquinas para hacerlos. Una máquina para hacer tatuajes impulsa agujas hacia arriba y hacia abajo mientras va depositando la tinta dentro de la piel.</p>
</section>
@endsection