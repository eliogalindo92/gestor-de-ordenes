@csrf
<div class="col-md-2">
    <label for="NumeroPlan" class="form-label">Número del plan</label>
    <input type="number" class="form-control" name="numero" id="NumeroPlan" value="{{old(value('nombre'))}}">
</div>

<div class="col-md-5">
    <label for="FechaPlan" class="form-label">Fecha de distribución</label>
    <input type="datetime-local" class="form-control" id="FechaPlan">
</div>

<div class="col-md-5">
    <label for="EntidadPlan" class="form-label">Entidad solicitante</label>
    <select class="form-select" id="EntidadPlan">
        <option selected disabled value="">Seleccione...</option>
        @foreach($entidades as $entidad)
            <option value="{{$entidad->id}}">{{$entidad->nombre_entidad}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12 text-end">
    <button class="btn btn-primary" type="submit">Guardar</button>
</div>

