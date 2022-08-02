<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/cajas/style.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
	{{-- <script type="text/javascript"  src=" {{ asset('js/highcharts.js') }} " ></script> --}}
	<script type="text/javascript"  src=" {{ asset('js/vue.min.js') }} " ></script>
    <script type="text/javascript"  src=" {{ asset('js/vue-resource.min.js') }} " ></script>
    <link rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
    <meta name="token" id="token" value="{{ csrf_token()}}">
    {{-- _______________________________________________________________________________________ --}}
    {{--  --}}
    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}
    {{--  --}}
	<title>@yield('titulo')</title>
	<link rel="shorcut icon"  href="">
</head>
<body class="ColorAdmin" >

			{{-- navegador de la página --}}
			@include('layouts.admin.navegador')

			{{-- encabezado de la págian --}}
			@include('layouts.admin.encabezado')

			{{-- articulo de la página --}}

			<div class="container contenido">
				{{--contenido--}}
				@yield('contenido')

			</div>
		@include('layouts.admin.footer')
		

		    {{-- pie de página --}}


		{{-- Estos scripts hacen posible las animaciones, cuando la pantalla es del tamaño de un celular  y hace el efecto del menú --}}
			<!-- jQuery 3 -->
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		{{-- API Clientes --}}
		<script src="{{asset('js/apicliente.js')}}"></script>
 </body>

</html>
