@extends('layouts.admin.master')
@section('titulo','Tipo Tattoos')
@section('contenido')
<div class="row">
	@include('layouts.admin.success')
</div>

<div class="container col-md-12 ">


	<div class="row">
		<div class="col-md-4">
				
				@include('tipo_tattoo.buscar')
		</div>
	</div>

	<a href="{{route('tipo_tattoos.create')}}">
					<button class="btn btn-primary">Nuevo</button>
	</a>				
	<div class="table table-responsive sombrasBorde">
		<table class=" table" >
			<thead class="table theadB" >
				<tr>
					<th class="text-center theadB">Folio</th>
					<th class="text-center theadB">Tipos</th>
					<th class="text-center theadB">Opciones</th>
				</tr>
			</thead>
			
			<tbody class="table">

					@foreach ($tattoos as $tattoo)
						 <tr>
						 	<td class="text-center">{{$tattoo->id_tipo_tattoo}}</td>
						 	<td class="text-center">{{$tattoo->tipo}}</td>

						 	<td class="text-center">
							<a href="{{route('tipo_tattoos.edit',$tattoo->id_tipo_tattoo)}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button></a>

							<a href="" data-target="#modal-delete-{{$tattoo->id_tipo_tattoo}}" data-toggle="modal" ><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
					
							</td>
						 </tr>
					  @include('tipo_tattoo.modal')
					 @endforeach
			 </tbody>
		 </table>
	</div>
	{{$tattoos->render()}}
</div>
		
@endsection