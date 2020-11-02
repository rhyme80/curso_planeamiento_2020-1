<div class="modal fade" id="modal-delete-{{$ticket->id}}" style="display: none;">
	<form action="{{route('tickets.destroy',$ticket->id)}}" method="post">
		@csrf
		@method('DELETE')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
					<h4 class="modal-title">Eliminar a {{$ticket->nombre}} con id:{{$ticket->id}}</h4>
				</div>
				<div class="modal-body">
					<p>Esta seguro que desea eliminar de manera permanente este registro...</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">NO</button>
					<button type="submit" class="btn btn-info">SI</button>
				</div>
			</div>
			<!-- /.modal-content-->
		</div>
		<!-- /.modal-dialog-->
	</form>
</div>