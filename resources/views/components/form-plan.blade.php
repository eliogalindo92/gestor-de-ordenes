@csrf
<div class="col-md-2">
    <label for="NumeroPlan" class="form-label">Número del plan *</label>
    <input type="number" class="form-control" name="numero_plan" id="NumeroPlan" min="1" max="10000" value="{{old('numero_plan', $plan->numero_plan)}}">
    @error('numero_plan')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-md-5">
    <label for="IdPlan" class="form-label">Entidad solicitante *</label>
    <select class="form-select" name="id_entidad" id="IdPlan">
        <option selected disabled value="0">Seleccione...</option>
        @foreach($entidades as $entidad)
            <option value="{{$entidad->id}}" @selected(old('id_entidad', $plan->id_entidad) == $entidad->id)>{{$entidad->nombre_entidad}}</option>
        @endforeach
    </select>
    @error('id_entidad')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-md-5">
    <label for="FechaDistribucion" class="form-label">Fecha de distribución *</label>
    <input type="datetime-local" class="form-control" name="fecha_distribucion" id="FechaDistribucion" value="{{old('fecha_distribucion', is_null($plan->fecha_distribucion) ? '' : $plan->fecha_distribucion->format('Y-m-d\TH:i'))}}">
    @error('fecha_distribucion')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-sm-12 text-end">
    <button class="btn btn-success" type="submit">Guardar</button>
</div>

