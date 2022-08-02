@extends('layouts.admin.master')
@section('titulo','VIDEOS')
@section('contenido')
<div class="row">
    @include('layouts.admin.success')
</div>

 <div class="row">
	<div class="col-md-8">
		<h3 class="tabla">Mis Videos
			<a href="{{route('videos.create')}}">
			<button class="btn btn-primary">Nuevo</button>
			</a>
		</h3>
	</div>
</div> 

<table class="table table-responsive sombrasBorde">
	<thead class="tabla">
		<tr>
			<th class="text-center theadB">Numero de Video</th>
			<th class="text-center theadB">Nombre</th>
			<th class="text-center theadB">Direccion URL</th>
			<th class="text-center theadB">Descripcion</th>
			<th class="text-center theadB">Fecha de Publicacion</th>
			<th class="text-center theadB">Fecha de Expiracion</th>
			<th class="text-center theadB">Tipo de Tatto</th>
			
			<th class="text-center theadB">Operaciones</th>
		</tr>		
	</thead>

	<tbody class="tabla">
		@foreach($datos as $dato)
		<tr>
			<td class="text-center">{{$dato->id_video}}</td>
			<td class="text-center">{{$dato->nombre}}</td>
			<td class="text-center">{{$dato->direccion_url}}</td>
			<th class="text-center">{{$dato->descripcion}}</th>
			<th class="text-center">{{$dato->fecha_publicacion}}</th>
			<th class="text-center">{{$dato->fecha_expiracion}}</th>
			<th class="text-center">{{$dato->documentos->tipo}}</th>
			
			<td>
				<a href="{{route('videos.edit',$dato->id_video)}}"><button type='button' class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a>


				<a href="" data-target="#modal-delete-{{$dato->id_video}}" data-toggle="modal"><button type="button" class="btn btn-danger"><span class='glyphicon glyphicon-trash'></span></button></a>

			</td>
		</tr>
		@include('videos.modal')
		@endforeach
		
	</tbody>
</table>

@endsection