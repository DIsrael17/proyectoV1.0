<div class="modal" role="dialog" tabindex="-1" id="modal-delete-{{$tattoo->id_tipo_tattoo}}">

	<form action="{{route('tipo_tattoos.destroy',$tattoo->id_tipo_tattoo)}}" method="POST">

		<input type="hidden" name="_method" value="DELETE">

		{{csrf_field()}}{{--//se pone un toquen--}}
 
		<div class="modal-dialog">
			
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismss="modal" aria-label="Close">
						<span data-dismiss="modal">x</span>
					</button>
					<h4 class="modal-title">Eliminar {{$tattoo->tipo}}</h4>
				</div>

				<div class="modal-body">
					<p>Estas seguro de eliminar el tipo de tattoo :  {{$tattoo->tipo}} <br>
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