@extends('layouts.start')
@section('titulo','Ver Tickets')
@section('content')

<div class="col-md-6">
    <!-- general form elements-->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Informacion de un Ticket</h3>
        </div>
        <!-- /.box-header-->
        <!-- form start -->
        <form role="form" action="" method="">
            <div class="box-body">
                <div class="form-group">
                    <label for="nombre">ID</label>
                    <input type="text" class="form-control" value="{{$ticket->id}}" disabled>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" value="{{$ticket->nombre}}" disabled>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" {{ $ticket->tipo_tramite=='PLATAFORMA'?'checked':'' }} disabled>
                            PLATAFORMA
                        </label>
                        <label>
                            <input type="radio" {{ $ticket->tipo_tramite=='VENTANILLA'?'checked':'' }} disabled>
                            VENTANILLA
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombre">Fecha</label>
                        <input type="text" class="form-control" value="{{$ticket->fecha}}" disabled="">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled {{$ticket->estado == 1 ? 'checked' : ''}}>Atendido
                    </label>
                </div>
            </div>
            <!-- /.box-body-->
        </form>
    </div>
    <!-- /.box-->
</div>
@endsection