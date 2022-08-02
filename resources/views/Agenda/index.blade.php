@extends('layouts.admin.master')
@section('titulo','Listado de agendas')
@section('contenido')
<div class="row">
	@include('layouts.admin.success')
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de agendas </h3>
		@include('agenda.buscar')
	</div>
</div>
 
    <a href="{{route('agendas.create')}}"><button class="btn btn-success">Nuevo</button></a>
	<div class="table table-responsive sombrasBorde">
		<table class="table">
			<thead class="table">
				<tr>
					<th class="text-center theadB" >Titulo</th>
					<th class="text-center theadB" >Fecha de inicio</th>
					<th class="text-center theadB" >Fecha de finalización</th>
					<th class="text-center theadB" >Hora inicio</th>
					<th class="text-center theadB" >Hora fin</th>
					<th class="text-center theadB" >Nombre completo</th>
					<th class="text-center theadB" >Folio correspondiente</th>
					<th class="text-center theadB" >Actividad a realizar</th>
					<th class="text-center theadB" >Acciones</th>
				</tr>
			</thead>
 
			<tbody class="table">
				@foreach($agendas as $agenda)
					<tr>
						<td class="text-center">{{$agenda->titulo}}</td>
						<td class="text-center">{{$agenda->fechaInicio}}</td>
						<td class="text-center">{{$agenda->fechaFin}}</td>
						<td class="text-center">{{$agenda->horaInicio}}</td>
						<td class="text-center">{{$agenda->horaFin}}</td>
						<td class="text-center">
							{{$agenda->peticiones->clientes->nombre}}
							{{$agenda->peticiones->clientes->apelidop}}
							{{$agenda->peticiones->clientes->apellidom}}
						</td>
						<td class="text-center">{{$agenda->peticiones->folio}}</td>
						<td class="text-center">{{$agenda->actividad}}</td>

						<td class="text-center">
						<a href="{{route('agendas.edit',$agenda->id_agenda)}}"><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button></a>
   				  		<a href="" data-target="#modal-delete-{{$agenda->id_agenda}}" data-toggle="modal"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a>

						
					</td>
					</tr>
					@include('agenda.modal')
				@endforeach
			</tbody>
		</table>
		{{$agendas->render()}}
	</div>
@endsection
