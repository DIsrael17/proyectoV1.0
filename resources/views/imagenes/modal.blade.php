<div class="modal" role="dialog" tabindex="-1" id="modal-delete-{{$dato->id_imagen}}">

	<form action="{{route('image.destroy',$dato->id_imagen)}}" method="POST">

		<input type="hidden" name="_method" value="DELETE">

		{{csrf_field()}}

		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
					<h4 class="modal-title">Eliminar la Imagen {{$dato->id_imagen}}</h4>
				</div>

				<div class="modal-body">
					<p>Esta seguro de Eliminar la Imagen : ?<br>
						{{$dato->id_imagen}}

					</p>
				</div>

				<div class="modal-footer">
					<button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger">Confirmar</button>
				</div>
				
			</div>
			
		</div>
		
	</form>
	
</div>