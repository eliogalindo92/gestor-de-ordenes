<div class="table-responsive">
    <div class="row">
        <div class="col-sm-12">
            @section('alerta')
                @if(session('estado'))
                    <div class="alert alert-success" style="text-align: center">
                        {{session('estado')}}
                    </div>
                @endif
            @endsection
        </div>
        <div class="col-sm-9">
        </div>
        <div class="col-sm-3">
            <input type="search" class="form-control" name="barra_buscar" id="BarraBuscar" placeholder="Escriba aquí para realizar una búsqueda" wire:model="busqueda">
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

                    <a class="btn btn-sm btn-warning" href="{{ route('plan.edit', $plan) }}">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <a class="btn btn-sm btn-primary" href="{{ route('plan.show', $plan, $entidades) }}">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$planes->links()}}
</div>
