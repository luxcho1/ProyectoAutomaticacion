@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<div class="container text-center" style="padding-top: 5%; padding-bottom: 5%;" >
    
    <!-- Insertar RUT -->
    <div class="row" style="padding-bottom: 5%">
      <div class="col-6">
        <div class="form-group">
            <h3 style="text-align: start">RUT</h3>
            <input class="form-control form-control-lg" type="text" name="rut" value="{{ isset($cliente->rut)?$cliente->rut:old('rut') }}" id="rut">        
        </div>
      </div>
      <div class="col-6">
      </div>
    </div>


    <!-- Insertar Nombre y Apellido -->
    <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Nombre</h3>
              <input class="form-control form-control-lg" type="text" name="nombre" value="{{ isset($cliente->nombre)?$cliente->nombre:old('nombre') }}" id="nombre">        
          </div>
        </div>
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Apellido</h3>
              <input class="form-control form-control-lg" type="text" name="apellido" value="{{ isset($cliente->apellido)?$cliente->apellido:old('apellido') }}" id="apellido">        
          </div>
        </div>
      </div>


      <!-- Insertar Direccion y Comuna -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Dirección</h3>
              <input class="form-control form-control-lg" type="text" name="direccion" value="{{ isset($cliente->direccion)?$cliente->direccion:old('direccion') }}" id="direccion">        
          </div>
        </div>
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Comuna</h3>
              <input class="form-control form-control-lg" type="text" name="comuna" value="{{ isset($cliente->comuna)?$cliente->comuna:old('comuna') }}" id="comuna">        
          </div>
        </div>
      </div>


      <!-- Insertar Telefono -->

      <div class="row" style="padding-bottom: 5%">
        <div class="col-6">
          <div class="form-group">
              <h3 style="text-align: start">Telefono</h3>
              <input class="form-control form-control-lg" type="text" name="telefono" value="{{ isset($cliente->telefono)?$cliente->telefono:old('telefono') }}" id="telefono">        
          </div>
        </div>
        <div class="col-6">
        </div>
      </div>


      <!-- Insertar Nombre usuario y Contraseña -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Nombre usuario</h3>
              <input class="form-control form-control-lg" type="text" name="nombre_usuario" value="{{ isset($cliente->nombre_usuario)?$cliente->nombre_usuario:old('nombre_usuario') }}" id="nombre_usuario">        
          </div>
        </div>
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Contraseña</h3>
              <input class="form-control form-control-lg" type="text" name="contraseña" value="{{ isset($cliente->contraseña)?$cliente->contraseña:old('contraseña') }}" id="contraseña">        
          </div>
        </div>
      </div>


      <!-- Botones -->
      <div class="row">
        <input class="btn btn-success btn-lg" type="submit" value="{{ $modo }} Cliente" id="ingresar">
        <a class="btn btn-primary btn-lg" href="{{ url('/') }}" id="regresar" name="regresar">Regresar</a>
      </div>
  </div>