<!DOCTYPE html>
<html>
<head lang="es" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/cajas/style.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{asset('./css/bootstrap.min.css')}} ">
	{{-- hace posible el efecto de las imagenes --}}
	<link rel="stylesheet" type="text/css" href=" {{asset('./css/baguetteBox.min.css')}} ">
     <link rel="stylesheet" type="text/css" href=" {{asset('/css/gallery-clean.css')}} ">
	<script type="text/javascript"  src=" {{ asset('js/vue.min.js') }} " ></script>
    <script type="text/javascript"  src=" {{ asset('js/vue-resource.min.js') }} " ></script>
    <link rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" type="text/css" href=" {{asset('css/cargando.css')}} ">
    <meta name="token" id="token" value="{{ csrf_token()}}">
   

	<title>
		@foreach ($datos as $dato)
			{{$dato->nombre}}
		@endforeach
		
		| @yield('titulo')
   </title>
	

	<link rel="shorcut icon"  @foreach ($datos as $dato)
		{{-- expr --}}
	href=" {{ asset('img/'.$dato->icono) }}" @endforeach>
</head>
<style type="text/css">
	.P12
	{

		background-image:url('img/fondo.jpg');
		background-size:cover;
		background-position:center;

	}
</style>
<body 
	@foreach ( $datos as $dato)
	background="{{ asset('img/'.$dato->fondo) }}"
	@endforeach
>
<div class="P12">
		{{-- navegador de la página --}}
		@include('layouts.user.navegador')

		{{-- encabezado de la págian --}}
		@include('layouts.user.encabezado')

		{{-- articulo de la página --}}
			<div class="contenido ">
				<div class="container fondoColor contenido sombrasBorde">
					<main>
					
					{{--contenido--}}
					@yield('contenido')
					{{-- efecto cargando --}}
	 				@include('layouts.loading')
				
					</main>
					<div class="fix"></div>
				</div>
			</div>
</div>			

	@include('layouts.user.footer')
	{{-- pie de página --}}


	{{-- Estos scripts hacen posible las animaciones, cuando la pantalla es del tamaño de un celular  y hace el efecto del menú --}}
		<!-- jQuery 3 -->
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>

	<script src="{{asset('js/apicliente.js')}}"></script>
	<script src="{{asset('js/carga/carga.js')}}"></script>


	{{--Para indicar la velocidad de las imagenes del corousel--}}
	<script type="text/javascript">
	$(document).ready(function(){
	     $("#myCarousel").carousel({
	         interval :3000
	     });
	});
	</script>
</body>

</html>