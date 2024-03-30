@extends('layouts.app')
@section('content')
<head>
</head>

<body >
  <h1 style="text-align: center">Sistema de Gestión Taller Mecánico SERVIEXPRESS</h1>

  <div class="container-fluid container-lg">
    <img class="img-fluid" src="https://www.porschenorthscottsdale.com/static/brand-porsche/Service/porsche-service-header.jpg" alt=""> 
  </div>

  <div class="container-fluid container-lg text-center" style="margin-top: 3%; margin-bottom: 3%;">
    <div class="row">
      <div class="col">
        <div class="card" style="text-align: center;">
            <img src="https://cdn-icons-png.flaticon.com/512/2815/2815428.png" class="card-img-top" alt="" style="width: 250px; height: auto; margin: 0 auto;">
            <div class="card-body" style="background-color: #212529;">
              <h2 class="card-title" style="color: aliceblue">Panel Clientes</h2>
              <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-success" href="{{ url('/cliente/create') }}" id="ingresarCliente" name="ingresarCliente">Ingresar Clientes</a>
                <a class="btn btn-primary" href="{{ url('/cliente') }}" id="mostrarCliente" name="mostrarCliente">Mostrar Clientes</a>
                <a class="btn btn-warning" href="{{ url('/cliente/editar') }}" id="editarCliente" name="editarCliente">Editar Clientes</a>
                <a class="btn btn-danger" href="{{ url('/cliente/eliminar') }}" id="eliminarCliente" name="eliminarCliente" >Eliminar Clientes</a>
              </div>
            </div>
          </div>
          
      </div>
      <div class="col">
        <div class="card">
            <img src="https://images.vexels.com/media/users/3/192565/isolated/preview/07c3a38c72b24c8425efd456c3d92733-icono-de-trazo-de-calendario-de-reloj-analogico.png" class="card-img-top" alt="" style="width: 250px; height: auto; margin: 0 auto;">
          <div class="card-body" style="background-color: #212529;">
            <h2 class="card-title" style="color: aliceblue">Panel Registro Horas</h2>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-success" href="{{ url('/registro/create') }}" id="ingresarRegistro" name="ingresarRegistro">Ingresar Registros de horas</a>
              <a class="btn btn-primary" href="{{ url('/registro') }}" id="mostrarRegistro" name="mostrarRegistro">Mostrar Registros de horas</a>
              <a class="btn btn-warning" href="{{ url('/registro/editar') }}" id="editarRegistro" name="editarRegistro">Editar Registros de horas</a>
              <a class="btn btn-danger" href="{{ url('/registro/eliminar') }}" id="eliminarRegistro" name="eliminarRegistro">Eliminar Registros de horas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="text-align: center; margin-top: 4%" >
    <div class="row">
      <div class="col">
      </div>
      <div class="col">
        <div class="container mt-5">
            <button name="presionaAqui" id="presionaAqui" type="button" class="btn btn-primary" onclick="window.location.href = 'https://www.youtube.com/watch?v=xvFZjo5PgG0';">Presiona Aqui</button>
        </div>
      </div>
      <div class="col">
      </div>
    </div>
    <div class=" container-fluid row" style="">
      <div class="container">
        <img src="https://www.tiendawebchile.cl/wp-content/uploads/2017/09/logo-webpay-plus-3-copy.png" alt="" style="width: 500px; height: auto;" class="mx-auto d-block img-fluid">
      </div>
    </div>
  </div>
</body>
@endsection


