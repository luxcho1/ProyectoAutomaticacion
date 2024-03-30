@extends('layouts.app')
@section('content')
<div class="container">
    <head>
        <form action="{{ url('/registro/'.$registroHora->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('registroHora.formulario',['modo'=>'Editar'])
        </form>
    </head> 
</div>
@endsection