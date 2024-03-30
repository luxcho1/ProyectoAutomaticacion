@extends('layouts.app')
@section('content')
<head>
    <div class="container">
        <h1 style="text-align: center">Mostrar Registros de Horas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID de Reserva</th>
                    <th>RUT</th>
                    <th>Motivo de Reserva</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Marca de auto</th>
                    <th>Modelo de auto</th>
                    <th>Año de auto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registroHora as $registro)
                    <tr>
                        <td>{{ $registro->id_reserva }}</td>
                        <td>{{ $registro->rut }}</td>
                        <td>{{ $registro->motivo_reserva }}</td>
                        <td>{{ $registro->fecha }}</td>
                        <td>{{ $registro->hora }}</td>
                        <td>{{ $registro->auto_marca }}</td>
                        <td>{{ $registro->auto_modelo }}</td>
                        <td>{{ $registro->auto_año }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ url('/') }}" id="regresar" name="regresar">Regresar</a>
    </div>
</head>
@endsection