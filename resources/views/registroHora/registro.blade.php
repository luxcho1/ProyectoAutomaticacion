@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">

<body>
  <h1 style="text-align: center">Registro de Horas</h1>

  <div class="container">    
    <form action="{{ url('/registro') }}" method="post" enctype="multipart/form-data">
      @csrf
      @include('registroHora.formulario',['modo'=>'Ingresar'])
    </form>
  </div>
</body>
@endsection