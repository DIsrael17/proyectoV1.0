@extends('layouts.admin.master')
@section('titulo','nueva agenda ')
@section('contenido')
<div class="row">
	@include('layouts.admin.errors')
</div>

	<form method="POST" action="{{ route('peticiones.store') }}"  role="form">
							{{ csrf_field() }}


                                <div class="row">
					
								<div class="col-xs-6 col-sm-6 col-md-6">

									<div class="form-group">
										<label>Selecciona al cliente:</label>
										<select name="Usuario">
											<option disabled="false">Selecciona un folio</option>
											@foreach ($peticiones as $peticion)
												<option value="{{ $peticion->folio}}">
													{{$peticion->nombre}}
													{{$peticion->apellidop}}
													{{$peticion->apellidom}}
												</option>
											@endforeach
										</select>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<p>Descripción:</p>
										<textarea name="descripcion" id="descripcion" class="form-control input-sm" placeholder="introdusca una descripcion"
										style="margin: 0px 66px 0px 0px; height: 162px; width: 278px;" maxlength="50">
										</textarea>
									</div>
								</div>
							</div>
 
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success">

									<a href="{{ route('peticiones.index') }}" class="btn btn-info" >Cancelar</a>
								</div>	
 
							</div>
							
						</form>
@endsection