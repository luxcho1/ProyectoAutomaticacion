@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/cliente.css') }}">

<body>
  <h1 style="text-align: center">Registro Clientes</h1>

  <div class="container">    
    <form action="{{ url('/cliente') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('cliente.formulario',['modo'=>'Ingresar'])
    </form>
    </div>
</body>
@endsection








