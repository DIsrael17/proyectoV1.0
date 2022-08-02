<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Localidades</title>
	<script type="text/javascript"  src=" {{ asset('js/vue.min.js') }} " ></script>
    <script type="text/javascript"  src=" {{ asset('js/vue-resource.min.js') }} " ></script>
    <link   rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
    {{-- <link rel="stylesheet" type="text/css" href="{{{{ asset('css/loading.css') }}}}"> --}}
    {{-- <script type="text/javascript"  src=" {{ asset('js/load.js') }} " ></script> --}}
</head>
<body>
	<div class="container"> 
		<h1>Localidades de México</h1>
		<div id="main" class="row">
			<div class="col col-md-6">
				<input type="text" name="" placeholder="Buscar " v-model="buscar">
				<div class="col col-md-6">
					<select class="">
						<option disabled="">Elige un estado</option>
						<option v-for="estado in towns" v-bind.value="estado.id_estado">@{{estado.estado}}</option>
					</select>
				</div>
			 {{-- <ol>
				<li v-for="pueblo in filtro">@{{pueblo.nombre_municipio}}</li>
			</ol> --}}
			</div>
			<br>
			<div class="col col-md-6">
				<pre><span v-text="$data"></span></pre>
			</div>
			
		</div>
		
	</div>  
	<script type="text/javascript" src="{{ asset('js/apiPueblos.js') }}"></script>
</body>
</html>