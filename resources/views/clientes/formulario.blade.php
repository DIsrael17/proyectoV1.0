<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORMULARIO DE REGISTRO</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <meta name="token" id="token" value="{{ csrf_token ()}}">

    <script src="{{asset('js/vue.min.js')}}"></script>
    <script src="{{asset('js/vue-resource.min.js')}}"></script>
</head>
<h1>Registro de cliente</h1>
<body>
      <div id="apicliente">
            <div class="row">
            	<!-- inicio del Formulario -->
        	<div class="col-md-6">
        	   <input type="text" name="folio"  placeholder="Ingrese Su folio" class="form-control">
        	</div>
        	
        	<div class="col-md-6">
        	   <input type="text" name="nombre"  placeholder="Escriba su nombre" class="form-control">
        	</div>

        	<div class="col-md-6">
        	   <input type="text" name="apellidop" placeholder="Apellido Paterno" class="form-control">
        	</div>

        	<div class="col-md-6">
        	   <input type="text" name="apellidom" placeholder="Apellido Materno" class="form-control">
        	</div>

        	<div class="col-md-6">
        	   <input type="text" name="numero_tel"  placeholder="Número teléfonico" class="form-control">
        	</div>   

        	<div class="col-md-6">
        	   <input type="text" name="correo"  placeholder="E-mail" class="form-control">
        	</div>

        	<div class="col-md-6">
        	   <input type="text" name="pais"  placeholder="Nacionalidad" class="form-control">
        	</div>

        	<div class="col-md-6">
        	   <input type="text" name="estado"  placeholder="Estado: Yucatán" class="form-control">
        	</div> 

        	<div class="col-md-6">
        	   <input type="text" name="localidad"  placeholder="" class="Ciudad">
        	</div>

        	<div class="col-md-6">
        	   <input type="text" name="comentario"  placeholder="Comentarios" class="form-control">
        	</div>         	         	        	        	        	     	        	

          <!-- Fin del formulario -->
                       <td>
                       <span class="glyphicon glyphicon-pencil btn btn-default"></span>
                       <span class="glyphicon glyphicon-trash btn btn-default"></span>      	
                       </td>


        </div>
      </div>
<script src="{{asset('js/apicliente.js')}}"></script>

    
</body>
</html>
   