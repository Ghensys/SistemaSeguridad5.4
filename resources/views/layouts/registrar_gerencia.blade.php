<form role="form" method="POST" action="{{ url('gerencias') }}">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="NombreDelVisitante">Nombre Gerencia</label>
    <input type="text" class="form-control" name="descripcion_gerencia" placeholder="Gerencia">

    @if($errors->has('descripcion_gerencia'))
      <span style="color:red;">{{ $errors->first('descripcion_gerencia') }}</span>
    @endif


  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>