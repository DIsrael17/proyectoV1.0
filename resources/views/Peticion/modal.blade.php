<div class="modal" role="dialog" tabindex="-1" id="modal-delete-{{$peticion->id_peticion}}">{{--es la clave ´primaria de la tabla--}}
	
	{{--{!!Form::open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria),'method'=>'delete'))!!}--}}
	
	<form action="{{route('peticiones.destroy',$peticion->id_peticion)}}" method="POST">
		<input type="hidden" name="_method" value="DELETE">
   		{{ csrf_field() }}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
					</button>
					<h4 class="modal-title">Eliminar peticion: {{$peticion->id_peticion}}</h4>
				</div>

				<div class="modal-body">
					<p>¿Esta seguro de eliminar el registro? <br>
					con el formato: {{$peticion->id_peticion}} </p>
				</div>
	
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar
					</button>

					<button type="submit"  class="btn btn-danger">Confirmar</button>
					
				</div>
			</div>	
		</div>

	</form>	
	
</div>