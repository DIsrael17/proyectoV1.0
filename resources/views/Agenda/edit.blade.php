@extends('layouts.admin.master')
@section('titulo','Editar agenda')
@section('contenido')
<div class="row">
	@include('layouts.admin.errors')
</div>
	<form method="POST" action="{{ route('agendas.update',$editar->id_agenda)}}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							{{--patch:es un metodo que indica que se realisara una actualisacion a los datos.--}}


							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<span class="">Usuario:</span>
										<span class="">
											{{$editar->peticiones->clientes->nombre}}
											{{$editar->peticiones->clientes->apellidop}}
											{{$editar->peticiones->clientes->apellidom}}
										</span>
									</div>
								</div>
							</div><br>

							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<span class="">Fecha de inicio:</span>
										<input type="date" name="fechaInicio" id="" class="form-control input-sm" placeholder="fecha actual" value="{{$editar->fechaInicio}}">
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<span class="">Fecha de finalización:</span>
										<input type="date" name="fechaFin" id="" class="form-control input-sm" placeholder="fecha actual" value="{{$editar->fechaFin}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<span class="">Hora de inicio:</span>
										<input type="time" name="horaInico" id="hora" class="form-control input-sm" placeholder="introdusca la hora" value="{{$editar->horaInicio}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<span class="">Hora finalización:</span>
										<input type="time" name="horaFin" id="hora" class="form-control input-sm" placeholder="introdusca la hora" value="{{$editar->horaFin}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<p>Describe la actividad en menos de 400 caracteres</p>
										<textarea name="actividad" maxlength="900" style="margin: 0px 66px 0px 0px; height: 162px; width: 278px;">
											{{$editar->actividad}}
										</textarea>
									</div>
								</div>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success">

									<a href="{{ route('agendas.index') }}" class="btn btn-danger" >Cancelar</a>
								</div>	
 
							</div>
							
						</form>
@endsection