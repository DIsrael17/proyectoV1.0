<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	 <link rel="stylesheet"  href=" {{asset('css/fondo.css')}}">

  <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
   <!-- FONT AWESONE -->
  <link rel="stylesheet" href="{{asset('./adminlte/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('./adminlte/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('./adminlte/css/AdminLTE.min.css')}}">
	<title>Iniciar sesión</title>
</head>
<body class="body1" background=" {{ asset('./img/login.png') }} ">
	<div class="login-box">
		<div class="login-logo">
    		<a href="#" class="color" >SECCIÓN|ADMINISTRATIVA</a>
  		</div>
  		<div class="login-box-body"> 
  			<p class="login-box-msg">Ingrese para iniciar su sesion</p>

  			<form method="POST" action="{{ url('validar') }}"> 
  				{{csrf_field()}}<!--validar la sesion, siempre que haya un POST tiene que colocarse-->
  				<div class="form-group has-feedback">
		        <input type="text" class="form-control" placeholder="Usuario" name="user">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		        </div>
		        <div class="form-group has-feedback">
        		<input type="password" class="form-control" placeholder="Contraseña" name="password">
        		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
      			</div>
      			<div class="row">
		        <!-- /.col -->
		        <div class="col-xs-6">
		          <button type="submit" class="btn btn-primary center-block ">INGRESAR</button>
		        </div>
            <div class=" col-xs-6">
              <a class="btn btn-danger" href=" {{ url('home') }}">CANCELAR</a> 
            </div>
		        <!-- /.col -->
		      </div>
  			</form>

  		</div>
	</div>
	
</body>
</html>