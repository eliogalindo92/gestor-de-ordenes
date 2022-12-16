<div class="table-responsive">
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <label for="BarraBuscar" class="form-label">Buscar plan</label>
            <input type="search" class="form-control" name="barra_buscar" id="BarraBuscar" placeholder="Escriba aquí para realizar búsqueda" wire:model="busqueda">
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
        <tr>
            <th>
                Número
            </th>
            <th>
                Fecha de distribución
            </th>
            <th>
                Entidad solicitante
            </th>
            <th>
                Opciones
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($planes as $plan)
            <tr>
                <td>
                    {{$plan -> numero_plan}}
                </td>
                <td>
                    {{$plan -> fecha_distribucion}}
                </td>
                <td>
                    @foreach($entidades as $entidad)
                        @if($plan->id_entidad == $entidad->id)
                            {{$entidad->nombre_entidad}}
                        @endif
                    @endforeach
                </td>
                <td>

                    <a class="btn btn-sm btn-warning" href="{{ route('plan.edit', $plan) }}">Editar</a>
                    <a class="btn btn-sm btn-primary" href="{{ route('plan.show', $plan) }}">Mostrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$planes->links()}}
</div>
