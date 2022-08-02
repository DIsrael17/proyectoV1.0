@extends('layouts.admin.master')
@section('titulo','Noticias')
@section('contenido')
<div class="row">
    @include('layouts.admin.success')
</div>

<div class="row">
	<div class="col-md-8">
		<h3 class="tabla">Mis Noticias
			<a href="{{route('noot.create')}}">
			<button class="btn btn-primary">Nuevo</button>
			</a>
		</h3>
	</div>
</div>

<div class="table table-responsive sombrasBorde">
	<table class="table theadB ">
	<thead class="table">
		<tr>
			<th class="text-center theadB" >Clave</th>
			<th class="text-center theadB" >Titulo</th>
			<th class="text-center theadB" >Subtitulo</th>
			<th class="text-center theadB" >Descripcion</th>
			<th class="text-center theadB" >Publicado</th>
			<th class="text-center theadB" >Fecha de Publicacion</th>
			<th class="text-center theadB" >Fecha de Expiracion</th>
			<th class="text-center theadB" >Categoria</th>
			
			<th class="theadB">Operaciones</th>
		</tr>		
	</thead>

	<tbody class="table">
		@foreach($datos as $dato)
		<tr>
			<td class="text-center">{{$dato->id_noticia}}</td>
			<td class="text-center">{{$dato->titulo}}</td>
			<td class="text-center">{{$dato->subtitulo}}</td>
			<td class="text-center">{{$dato->descripcion}}</td>
			<td class="text-center">{{$dato->publicado}}</td>
			<td class="text-center">{{$dato->fecha_publicacion}}</td>
			<td class="text-center">{{$dato->fecha_expiracion}}</td>
			<td class="text-center">{{$dato->categorias->nombre}}</td>
			<td class="text-center">
				<a href="{{route('noot.edit',$dato->id_noticia)}}"><button type='button' class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a>


				<a href="" data-target="#modal-delete-{{$dato->id_noticia}}" data-toggle="modal"><button type="button" class="btn btn-danger"><span class='glyphicon glyphicon-trash'></span></button></a>

			</td>
		</tr>
		@include('noticias.modal')
		@endforeach
		
	</tbody>
</table>
</div>

@endsection