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
    <div class="row" style="padding-bottom: 5%">
      <div class="col">
        <div class="form-group">
            <h3 style="text-align: start">ID Reserva</h3>
            <input class="form-control form-control-lg" type="text" name="id_reserva" value="{{ isset($registroHora->id_reserva)?$registroHora->rut:old('id_reserva') }}" id="id_reserva">        
        </div>
      </div>
      <div class="col">
        <div class="form-group">
            <h3 style="text-align: start">RUT</h3>
            <input class="form-control form-control-lg" type="text" name="rut" value="{{ isset($registroHora->rut)?$registroHora->rut:old('rut') }}" id="rut">        
        </div>
      </div>
    </div>
    <div class="row" style="padding-bottom: 5%">
        <div class="col">
            <div class="form-group">
                <h3 style="text-align: start">Motivo de la reserva</h3>
                <input class="form-control form-control-lg" type="text" name="motivo_reserva" value="{{ isset($registroHora->motivo_reserva)?$registroHora->motivo_reserva:old('motivo_reserva') }}" id="motivo_reserva">        
            </div>
        </div>
    </div>
    <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Fecha</h3>
              <input class="form-control form-control-lg" type="date" name="fecha" value="{{ isset($registroHora->fecha)?$registroHora->fecha:old('fecha') }}" id="fecha">        
            </div>
        </div>
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Hora</h3>
              <input class="form-control form-control-lg" type="time" name="hora" value="{{ isset($registroHora->hora)?$registroHora->hora:old('hora') }}" id="hora">        
            </div>
        </div>
      </div>
      <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Marca del auto</h3>
              <select class="form-control form-control-lg" name="auto_marca" id="auto_marca">
                <option value="">Selecciona una marca</option>
                <option value="Ferrari" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Ferrari') ? 'selected' : '' }}>Ferrari</option>
                <option value="Porsche" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Porsche') ? 'selected' : '' }}>Porsche</option>
                <option value="Mercedes" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Mercedes') ? 'selected' : '' }}>Mercedes</option>
                <option value="BMW" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'BMW') ? 'selected' : '' }}>BMW</option>
                <option value="Toyota" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Toyota') ? 'selected' : '' }}>Toyota</option>
                <option value="Honda" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Honda') ? 'selected' : '' }}>Honda</option>
                <option value="Mclaren" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Mclaren') ? 'selected' : '' }}>Mclaren</option>
                <option value="Audi" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Audi') ? 'selected' : '' }}>Audi</option>
                <option value="Lamborghini" {{ (isset($registroHora->auto_marca) && $registroHora->auto_marca == 'Lamborghini') ? 'selected' : '' }}>Lamborghini</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Modelo del auto</h3>
              <input class="form-control form-control-lg" type="text" name="auto_modelo" value="{{ isset($registroHora->auto_modelo)?$registroHora->auto_modelo:old('auto_modelo') }}" id="auto_modelo">        
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <h3 style="text-align: start">Año del auto</h3>
                <select class="form-control form-control-lg" name="auto_año" id="auto_año">
                    <option value="">Selecciona un año</option>
                    @for ($i = date('Y'); $i >= 1950; $i--)
                        <option value="{{ $i }}" {{ (isset($registroHora->auto_año) && $registroHora->auto_año == $i) ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>              
            </div>
          </div>
      </div>

      <div class="row">
        <input class="btn btn-success btn-lg" type="submit" value="{{ $modo }} Registro de hora" id="ingresarRegistro">
        <a class="btn btn-primary btn-lg" href="{{ url('/') }}" id="regresar" name="regresar">Regresar</a>
      </div>
  </div>












  