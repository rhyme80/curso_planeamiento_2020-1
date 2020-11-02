@extends('layouts.start')
@section('titulo','Create Tickets')
@section('content')

<div class="col-md-6">
    <!-- general form elements-->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Agregar un Ticket</h3>
        </div>
        <!-- /.box-header-->
        <!-- form start -->
        @include('partial.error')
        <form role="form" action="{{ route('tickets.store') }}" method="post">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" name="tipo_tramite" id="tipo_tramite" value="PLATAFORMA" checked="">
                            PLATAFORMA
                        </label>
                        <label>
                            <input type="radio" name="tipo_tramite" id="tipo_tramite" value="VENTANILLA" checked="">
                            VENTANILLA
                        </label>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled>Atendido
                    </label>
                </div>
            </div>
            <!-- /.box-body-->
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <!-- /.box-->
</div>
@endsection