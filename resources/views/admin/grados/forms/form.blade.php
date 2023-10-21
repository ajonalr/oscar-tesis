<select id="nombre" name="nombre" class="my-3" required>

  <option value="PRIMERO PRIMARIA">PRIMERO PRIMARIA</option>
  <option value="SEGUNDO PRIMARIA">SEGUNDO PRIMARIA</option>
  <option value="TERCERO PRIMARIA">TERCERO PRIMARIA</option>
  <option value="CUARTO PRIMARIA">CUARTO PRIMARIA</option>
  <option value="QUINTO PRIMARIA">QUINTO PRIMARIA</option>
  <option value="SEXTO PRIMARIA">SEXTO PRIMARIA</option>

</select>

<select id="profe" name="user_id" class="my-3" required>
@foreach ($profe as $p)
  <option value="{{$p->id}}">{{$p->name}}</option>
@endforeach

</select>

<div class="form-group">
  <label for="">Seccion</label>
  <input type="text" class="form-control text-uppercase" name="seccion" placeholder="Seccion de Grado" value="A">
</div>
