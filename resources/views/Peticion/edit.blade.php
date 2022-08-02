@extends('layouts.admin.master')
@section('titulo','Editar agenda')
@section('contenido')
	<form method="POST" action="{{ route('peticiones.update',$editar->id_peticion)}}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							{{--patch:es un metodo que indica que se realisara una actualisacion a los datos.--}}
							<div class="row">

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<p>Descripción:</p>
										<textarea  type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="descripcion" 
										value="{{$editar->descripcion}}"
										style="margin: 0px 66px 0px 0px; height: 162px; width: 278px;">
											{{$editar->descripcion}}
										</textarea>
									</div>
								</div>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success">

									<a href="{{ route('peticiones.index') }}" class="btn btn-danger" >Cancelar</a>
								</div>	
 
							</div>
							
						</form>
@endsection