<form action="{{action('tareaController@store')}}"method="POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group col-md-6">
      <select class="form-control" name="prioridad">
      
        <option>Alta</option>
        <option>Media</option>
        <option>Baja</option>
        </select>
    </div>
  </div>
  <div class="form-group">
    <label for="fechainicio">Fecha Inicio</label>
    <input type="date" class="form-control" name="fechainicio" placeholder="Fecha inicio">
  </div>
  <div class="form-group">
    <label for="fechafin">Fecha Fin </label>
    <input type="date" class="form-control" name="fechafin" placeholder="Fecha fin">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="descripcion">Descripcion</label>
      <input type="text" class="form-control" name="descripcion">
    </div>
  
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>