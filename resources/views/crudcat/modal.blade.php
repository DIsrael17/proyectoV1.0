<div class="modal" role="dialog" tabindex="-1" id="modal-delete-{{$dato->id_categoria}}">

	<form action="{{route('cat.destroy',$dato->id_categoria)}}" method="POST">

		<input type="hidden" name="_method" value="DELETE">

		{{csrf_field()}}

		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
					<h4 class="modal-title">ELIMINAR la Categoria {{$dato->id_categoria}}</h4>
				</div>

				<div class="modal-body">
					<p>Esta seguro de ELIMINAR la Categoria : ?<br>
						{{$dato->id_categoria}}

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