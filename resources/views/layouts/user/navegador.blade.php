<div class="container" id="apicliente" >

    <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
 {{-- _________________________________________________________________________________________ --}}

   <a class="navbar-brand navbar-right MIB2 " title="Admin." href="{{ route('config.index') }}"><img src=" {{ asset('/img/user/duser.jpg')}} " class=" img-circle img-responsive " width="40" height="40"></a>

    <a class=" navbar-brand navbar-right MIB2" href="facebook.com" title="Facebook"><img  class="img-circle img-responsive" src="{{ asset('img/facebook.png') }}" width="40" height="40"></a>

    <a class="navbar-brand navbar-right MIB2" href="instagram.com" title="Instagram"><img class=" img-rounded img-responsive" src="{{ asset('img/instagram.png')}}" width="40" height="40"></a>
 
  <div class="navbar-header TAMA ">


      <button type="button" class="navbar-toggle {{-- pull-left MIB --}}" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    
    
    
   
  </div>

 {{-- _________________________________________________________________________________________ --}}
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  

  <div class="collapse navbar-collapse navbar-ex1-collapse" >

    
@foreach ($datos as $dato)
  <ul class="nav navbar-nav">
      <li><a href="{{ url('home') }}" class="glyphicon glyphicon-home" class="btn btn-default" title="Ir a inicio"></a>
      </li>

      <li class="">
        <a href="{{ url('imagen') }}" title="Galeria">
          <span class="glyphicon glyphicon-picture"></span> {{$dato->seccion1}}
        </a>
      </li>

      <li>
        <a href="{{ url('video') }}" title="Videos"><span class="glyphicon glyphicon-film"></span> {{$dato->seccion4}}
        </a>
      </li>

      <li>
        <a href="{{ url('noticia') }} "  title="Mi historia">
          <span class="glyphicon glyphicon-bookmark"></span>{{$dato->seccion3}}
        </a>
      </li>

      <li>
        <a v-on:Click="showModal" href="#" title="Solicitar cita">
          <span class="glyphicon glyphicon-paperclip"></span> {{$dato->seccion2}}
        </a>
      </li> 

    </ul>
@endforeach
    
    
 
{{--     <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form> --}}
 
    <ul class="nav navbar-nav navbar-right">
      {{-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Menú #2 <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
        </ul>
      </li> --}}
    </ul>

  </div>
</nav>
{{-- Modal para solicitudes --}}
@include('layouts.clienteModal')
</div>
