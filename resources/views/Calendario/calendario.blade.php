<!DOCTYPE html>
<html>
<head lang="es">
	<title></title>
	{{-- Efectos personales para el calendario --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('calendar/style.css') }}">
		{{-- Boostrap  --}}
	<link rel="stylesheet" type="text/css" href=" {{asset('css/bootstrap.min.css')}} ">
		{{--1-jquery--}}
	<script src="{{asset('calendar/jquery.min.js')}}"></script>
		{{--2- Moment --}}
    <script type="text/javascript" src="{{ asset('calendar/moment.min.js') }}"></script>
    	{{--3-Full Calendar --}}
	<script type="text/javascript" src="{{ asset('calendar/fullcalendar.min.js') }}"></script>
		{{--FullCalender CSS--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('calendar/fullcalendar.min.css') }}">
		{{-- Calendar print --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('calendar/fullcalendar.print.css') }}" media='print'>
		{{--JS  Bootstrap, hace posible los efectos del despliegue--}}
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
		{{-- Efectos personales --}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/cajas/style.css') }}">
		{{-- ScriptCalendario --}}
	<script type="text/javascript" src="{{ asset('calendar/Calendario.js') }}"></script>
		{{--Traduccion EspañolFullCalendar--}}
	<script type="text/javascript" src="{{ asset('calendar/es-us.js') }}"></script>
		{{--para el color y forma de los eventos--}}
	<link rel="stylesheet" type="text/css" href="{{ asset('adminlte/css/adminLTE.css') }}">


</head>
<body>
	@include('layouts.admin.navegador')
	@include('layouts.admin.encabezado')

	<div class="container" >
			<section class="content">
				<div class="row">
					<div class="col col-md-12 Margen">
						<div id="calendar"></div>
					</div>
				</div>

			</section>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="titulo">Nuevo evento</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true"></span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div id="descripcion">
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-success">Agregar</button>
	      	<button type="button" class="btn btn-primary">Modificar</button>
	      	<button type="button" class="btn btn-danger">Borrar</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	      </div>
	    </div>
	  </div>
	</div>
	{{-- EndModal --}}
	{{--Pie de página--}}
	@include('layouts.admin.footer')
</body>
</html>


