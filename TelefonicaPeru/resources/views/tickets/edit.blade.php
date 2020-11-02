@extends('layouts.start')
@section('titulo','Ver Tickets')
@section('content')
<div class="col-md-6">
	<!-- gneral form elements-->
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Editar de un Ticket</h3>
		</div>
		<!-- /.box headre-->
		<!-- form start -->
		@include('partial.error')
		<form role="form" action="{{route('tickets.update',$ticket->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="box-body">
				<div class="form-group">
					<label for="nombre">ID</label>
					<input type="text" class="form-control" value="{{$ticket->id}}" disabled>
				</div>
				<div class="form-group">
					<label for="nombre">Nombres</label>
					<input type="text" class="form-control" value="{{$ticket->nombre}}" name="nombre">
				</div>
				<div class="form-group">
					<div class="radio">
					<label>
						<input type="radio"{{$ticket->tipo_tramite=='PLATAFORMA'? 'checked':''}} name="tipo_tramite" value="PLATAFORMA">
						PLATAFORMA
					</label>
					<label>
						<input type="radio"{{$ticket->tipo_tramite=='VENTANILLA'? 'checked':''}} name="tipo_tramite" value="VENTANILLA">
						VENTANILLA
					</label>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre">Fecha</label>
					<input type="text" class="form-control" value="{{$ticket->fecha}}" name="fecha" disabled>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" {{$ticket->estado==1 ? 'checked':''}} name="estado">Atendido
					</label>
				</div>
			</div>
			<!-- /.box.body-->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
		</form>
	</div>
	<!-- /.box -->
</div>
@endsection