<div class="table-responsive">
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <label for="BarraBuscar" class="form-label">Buscar solicitud</label>
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
                Fecha de solicitud
            </th>
            <th>
                Entidad solicitante
            </th>
            <th>
                Descripción del producto
            </th>
            <th>
                U/M
            </th>
            <th>
                Cantidad solicitada
            </th>
            <th>
                Estado
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($solicitudes as $solicitud)
            <tr>
                <td>
                    {{$solicitud -> numero_solicitud}}
                </td>
                <td>
                    {{$solicitud -> fecha_solicitud}}
                </td>
                <td>
                    @foreach($entidades as $entidad)
                        @if($solicitud->id_entidad == $entidad->id)
                            {{$entidad->nombre_entidad}}
                        @endif
                    @endforeach
                </td>
                <td>
                    {{$solicitud -> descripcion_producto}}
                </td>
                <td>
                    {{$solicitud -> unidad_medida_producto}}
                </td>
                <td>
                    {{$solicitud -> cantidad_solicitada}}
                </td>
                <td>
                    <div class="form-check">
                        <label for="SolicitudFinalizada" class="form-label">Finalizada</label>
                        <input type="checkbox" name="finalizada" id="SolicitudFinalizada"class="form-check-input" onclick="this.checked=!this.checked" @checked($solicitud->finalizada==1)>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$solicitudes->links()}}
</div>
