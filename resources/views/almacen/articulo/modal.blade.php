<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$art->id}}">
	{{Form::Open(array('action'=>array('ArticuloController@destroy',$art->id),'method'=>'delete'))}}	
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				
				</button>
				<h4 class="modal-title"><center><strong>Eliminar  Articulo</strong></center></h4>
			</div>
						<div class="modal-body">
    <center><img src="/img/x.jpg" width="200" height="200"></center> 
    <center> <h3><strong>Confirme !! ¿ Desea Eliminar El Articulo ?</strong></h3>   </center>
</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-danger">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}
</div>