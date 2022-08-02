@extends('layouts.admin.master')
@section('titulo','nueva agenda ')
@section('contenido')
<div class="row">
	@include('layouts.admin.errors')
</div>

	<form method="POST" action="{{ route('agendas.store') }}"  role="form">
							{{ csrf_field() }}

		
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<span>Titulo menos de 90 caracteres:</span>
										<input type="text" name="titulo" id="fecha" class="form-control input-sm" placeholder="introdusca el titulo" maxlength="90">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<span>Introducir la fecha de inicio:</span>
										<input type="date" name="fechaInicio" id="fecha" class="form-control input-sm" placeholder="introdusca fecha actual">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<span>Introducir la fecha de finalización:</span>
										<input type="date" name="fechaFin" id="fecha" class="form-control input-sm" placeholder="introdusca fecha actual">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<span>Introducir la hora de inicio:</span>
										<input type="time" name="horaInicio" id="hora" class="form-control" placeholder="hora">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<span>Introducir la hora de finalización:</span>
										<input type="time" name="horaFin" id="hora" class="form-control" placeholder="hora">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">

									<span>Usuario:</span>	
									<select name="id_peticion"> 
										<option disabled="false" >Seleccione la petición</option>
										@foreach ($agendas as $agenda)
											<option value="{{$agenda->id_peticion}}">
												{{$agenda->clientes->nombre}}
												{{$agenda->clientes->apellidop}}
												{{$agenda->clientes->apellidom}}
											</option>
										@endforeach
										
									</select>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<p>Describe la actividad en 400 caracteres</p>
										<textarea name="actividad" maxlength="900" style="margin: 0px 66px 0px 0px; height: 162px; width: 278px;">
											
										</textarea>
									</div>
								</div>
							</div>
							<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
									<input type="submit"  value="Guardar" class="btn btn-primary">

									<a href="{{ route('agendas.index') }}" class="btn btn-danger" >Cancelar</a>
								</div>
							</div>
                            
						</form>
@endsection