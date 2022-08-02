@extends('layouts.admin.master')
@section('titulo','Listado de peticiones')
@section('contenido')
<div class="row">
	@include('layouts.admin.success')
</div>

	<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de peticiones </h3>
		@include('peticion.buscar')
	</div>
	</div>
    
    <a href="{{route('peticiones.create')}}"><button class="btn btn-success">Nuevo</button></a>
	<div class="table table-responsive sombrasBorde">
		<table class="table">
			<thead class="tabla theadB">
				<tr>
					<th class="text-center theadB">Descripcion</th>
					<th class="text-center theadB">Nombre completo</th>
					<th class="text-center theadB">Folio</th>
					<th class="text-center theadB">Acciones</th>
				</tr>
			</thead>

			<tbody>
				@foreach($peticiones as $peticion)
					<tr>
						<td class="text-center ">{{$peticion->descripcion}}</td>
						<td class="text-center ">
							{{$peticion->clientes->nombre}}
							{{$peticion->clientes->apellidop}}
							{{$peticion->clientes->apellidom}}
						</td>
						<td class="text-center ">{{$peticion->folio}}</td>

						<td class="text-center ">
						<a href="{{route('peticiones.edit',$peticion->id_peticion)}}"><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button></a>

   				  		<a href="" data-target="#modal-delete-{{$peticion->id_peticion}}" data-toggle="modal"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a>

						
					  </td>
					</tr>
					@include('peticion.modal')
				@endforeach
			</tbody>
		</table>
		{{$peticiones->render()}}
	</div>
@endsection
