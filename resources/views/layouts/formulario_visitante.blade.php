<form role="form" method="POST" action="{{ url('visitantes') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="NombreDelVisitante">Nombres</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombres">

    @if($errors->has('nombre'))
      <span style="color:red;">{{ $errors->first('nombre') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="ApellnameoDelVisitante">Apellidos</label>
    <input type="text" class="form-control" name="apellido" placeholder="Apellidos">

    @if($errors->has('apellido'))
      <span style="color:red;">{{ $errors->first('apellido') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="Cedula">Cedula</label>
    <input type="text" class="form-control" name="cedula" placeholder="Cedula">

    @if($errors->has('cedula'))
      <span style="color:red;">{{ $errors->first('cedula') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="NPase">Número de Pase</label>
    <input type="text" class="form-control" name="n_pase" placeholder="Número de Pase">

    @if($errors->has('n_pase'))
      <span style="color:red;">{{ $errors->first('n_pase') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="FechaNacimiento">Fecha de Nacimiento</label>
    <input type="text" class="form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">

    @if($errors->has('fecha_nacimiento'))
      <span style="color:red;">{{ $errors->first('fecha_nacimiento') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="Edad">Edad</label>
    <input type="text" class="form-control" name="edad" placeholder="Edad">

    @if($errors->has('edad'))
      <span style="color:red;">{{ $errors->first('edad') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="ZonaDeResidencia">Zona de Residencia</label>
    <input type="text" class="form-control" name="zona_residencia" placeholder="Zona de Residencia">

    @if($errors->has('zona_residencia'))
      <span style="color:red;">{{ $errors->first('zona_residencia') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="Gerencia">Gerencia</label>
    Select con las gerencias
  </div>
  <div class="form-group">
    <label for="TipoDeVisita">Tipo de Visita</label>
    Select con el tipo de visita
  </div>
  <div class="form-group">
    <label for="Responsable">Responsable</label>
    <input type="text" class="form-control" name="responsable" placeholder="Responsable">

    @if($errors->has('responsable'))
      <span style="color:red;">{{ $errors->first('responsable') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="Observacion">Observación</label>
    <input type="text" class="form-control" name="observacion" placeholder="Responsable">

    @if($errors->has('observacion'))
      <span style="color:red;">{{ $errors->first('observacion') }}</span>
    @endif

  </div>
  <div class="form-group">
    <label for="FechaHoraEntrada">Fecha de Entrada</label>
    <input type="text" class="form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
  </div>
  <div class="form-group">
    <label for="urlImg">Ingresar Imagen</label>
    <input type="file" name="urlImg">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>