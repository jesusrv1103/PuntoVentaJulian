<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$per->id}}">
	{{Form::Open(array('action'=>array('ClienteController@destroy',$per->id),'method'=>'delete'))}}	
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">x</span>
					</button>
					<h4 class="modal-title"><center><strong>Eliminar  Cliente</strong></center></h4>
				</div>
				<div class="modal-body">
					  <center><img src="/img/x.jpg" width="200" height="200"></center> 
    <center> <strong><h3>Confirme !! ¿ Desea Eliminar Cliente ?</h3></strong>   </center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</div>
	{{Form::Close()}}
</div>