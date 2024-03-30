@extends('layouts.app')
@section('content')
<head>
    <div class="container">
        <h1 style="text-align: center">Eliminar Clientes</h1>

        <div class="row">
            @foreach($cliente as $clientes)
                <div class="col-md-4">
                    <div class="card" style="margin-bottom: 10%">
                        <div class="card-body" style="">
                            <h3 class="card-text">RUT</h3>
                            <h6>{{ $clientes->rut }}</h6>
                            <h3 class="card-text">Nombre</h3>
                            <h6>{{ $clientes->nombre }} {{ $clientes->apellido }}</h6>

                            <h6></h6>
                            <form action="{{ url('/cliente/'.$clientes->id) }}" class="d-inline" method="post">
                                <div class="row">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" id="borrar" name="borrar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <a class="btn btn-primary btn-lg" href="{{ url('/') }}" id="regresar" name="regresar">Regresar</a>
        </div>
@endsection