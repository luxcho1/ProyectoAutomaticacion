@extends('layouts.app')
@section('content')

<head>
    <div class="container">
        <h1 style="text-align: center">Editar Clientes</h1>
        <div class="row">
            @foreach($cliente as $clientes)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 10%">
                        <div class="card-body" style="">
                            <h2 class="card-text">RUT</h2>
                            <h5>{{ $clientes->rut }}</h5>
                            <h2 class="card-text">Nombre</h2>
                            <h5>{{ $clientes->nombre }} {{ $clientes->apellido }}</h5> 
                            <div class="row">
                                <a href="{{ url('/cliente/'.$clientes->id.'/edit') }}" class="btn btn-warning" id="editar" name="editar">
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
@endsection