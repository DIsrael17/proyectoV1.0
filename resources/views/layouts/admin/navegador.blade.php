<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
 {{-- _________________________________________________________________________________________ --}}

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     
    </button>
    <a class="navbar-brand" href="#" title="Configurando información"><img src="{{ asset('img/iconos/admin.png')}}" width="30" height="30"></a>
  </div>
 {{-- _________________________________________________________________________________________ --}}
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">

   <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Menú"><span class="glyphicon glyphicon-th-list"></span>
             Menú Configuración <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('home') }}"><span class="glyphicon glyphicon-home"></span> Ir a vista de la página</a></li>
            <li class="divider"></li>
            <li><a href="{{ url('clientes') }}"><span class="glyphicon glyphicon-link"></span>Clientes</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('Carousel.index') }}"><span class="glyphicon glyphicon-link"></span> Carousel</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('config.index') }}"><span class="glyphicon glyphicon-link"></span> Configurar Página</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('agendas.index') }}"><span class="glyphicon glyphicon-link"></span> Agendas</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('peticiones.index') }}"><span class="glyphicon glyphicon-link"></span> Peticiones</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('tipo_tattoos.index') }}"><span class="glyphicon glyphicon-link"></span> Tipo de tattoos</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('tattoos.index') }}"><span class="glyphicon glyphicon-link"></span> Tattoos</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('noot.index') }}"><span class="glyphicon glyphicon-link"></span> Noticias</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('cat.index') }}"><span class="glyphicon glyphicon-link"></span> Categorias</a></li>
            <li class="divider"></li>

            <li><a href="{{ route('image.index') }}"><span class="glyphicon glyphicon-link"></span> Imagenes</a></li>
            <li class="divider"></li>
            
            <li><a href="{{ route('videos.index') }}"><span class="glyphicon glyphicon-link"></span> Videos</a></li>
            <li class="divider"></li>
            
          </ul>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-dark">
      <li><a href="{{ url('Calendario') }}" title="Cerrar sesión"><span class="glyphicon glyphicon-calendar"></span>Calendario</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-dark  pull-right">
        {{-- <li class=""><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#" ></a> --}}
       <li><a href="{{ url('logout') }}" title="Cerrar sesión">Cerrar Sesión <span class="glyphicon glyphicon-log-out"></span></a></li>
        
    </ul>
{{--     <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form> --}}
 
 
  </div>
</nav>
</div>
