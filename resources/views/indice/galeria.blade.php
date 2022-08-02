@extends('layouts.user.master')
@foreach ( $datos as $dato )
	@section('titulo',"$dato->seccion1")
@endforeach

@section('contenido')

<div class="container gallery-container">

    <h1>Galeria</h1>

    <p class="page-description text-center">TATTOOS GP</p>
    
    <div class="tz-gallery">

        <div class="row">
				@foreach ($imagenes as $imagen)
					<div  class="col-sm-6 col-md-4">
		                <div class="thumbnail sombrasBorde" >
		                    <a class="lightbox" href="{{ asset('img/imagenes/'.$imagen->archivo)}}">
		                        <img  src="{{ asset('img/imagenes/'.$imagen->archivo) }}">
		                    </a>
		                    <div class="caption">
		                        <p>{{$imagen->nombre}}</p>
		                        <p>{{$imagen->descripcion}}</p>
		                    </div>
		                </div>
           			 </div>
				@endforeach
        </div>

    </div>

</div> 

<script src="{{ asset('./js/baguetteBox.js') }}"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>



@endsection