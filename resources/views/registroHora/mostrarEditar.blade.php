@extends('layouts.app')
@section('content')

<head>
    <div class="container">
        <h1 style="text-align: center">Editar Registro Horas</h1>
        <div class="row">
            @foreach($registroHora as $registro)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 10%">
                        <div class="card-body" style="">
                            <h3 class="card-text">ID Reserva</h3>
                            <h6>{{ $registro->id_reserva }}</h6>
                            <h3 class="card-text">RUT</h3>
                            <h6>{{ $registro->rut }}</h6>
                            <h3 class="card-text">Fecha</h3>
                            <h6>{{ $registro->fecha }}</h6>
                            <div class="row">
                                <a href="{{ url('/registro/'.$registro->id.'/edit') }}" class="btn btn-warning" id="editar" name="editar">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a class="btn btn-primary btn-lg" href="{{ url('/') }}" id="regresar" name="regresar">Regresar</a>
        </div>
    </div>
</head>
@endsection


