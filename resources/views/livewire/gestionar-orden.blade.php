<div class="table-responsive">
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <label for="BarraBuscar" class="form-label">Buscar orden</label>
            <input type="search" class="form-control" name="barra_buscar" id="BarraBuscar"
                   placeholder="Escriba aquí para realizar búsqueda" wire:model="busqueda">
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
        <tr>
            <th>
                Número
            </th>
            <th>
                Fecha de elaboración
            </th>
            <th>
                Entidad solicitante
            </th>
            <th>
                Código del producto
            </th>
            <th>
                Descripción del producto
            </th>
            <th>
                U/M
            </th>
            <th>
                Cantidad ordenada
            </th>
            <th>
                Opciones
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ordenes as $orden)
            <tr>
                <td>
                    {{$orden -> numero_orden}}
                </td>
                <td>
                    {{$orden -> fecha_elaboracion}}
                </td>
                <td>
                    @foreach($entidades as $entidad)
                        @if($orden->id_entidad == $entidad->id)
                            {{$entidad->nombre_entidad}}
                        @endif
                    @endforeach
                </td>
                <td>
                    {{$orden -> codigo_producto}}
                </td>
                <td>
                    {{$orden -> descripcion_producto}}
                </td>
                <td>
                    {{$orden -> unidad_de_medida}}
                </td>
                <td>
                    {{$orden -> cantidad_ordenada}}
                </td>
                <td>
                 <a class="btn btn-sm btn-warning" href="{{ route('orden.edit', $orden) }}">Editar</a>
                 <a class="btn btn-sm btn-primary" href="{{ route('orden.show', $orden, $entidades) }}">Mostrar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$ordenes->links()}}
</div>
