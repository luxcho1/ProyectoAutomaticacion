@extends('layouts.app')
@section('content')
<div class="container">
    <head>
        <form action="{{ url('/cliente/'.$cliente->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('cliente.formulario',['modo'=>'Editar'])
        </form>
    </head> 
</div>
@endsection
