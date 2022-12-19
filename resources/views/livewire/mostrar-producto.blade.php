<div class="table-responsive">
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <label for="BarraBuscar" class="form-label">Buscar producto</label>
            <input type="search" class="form-control" name="barra_buscar" id="BarraBuscar" placeholder="Escriba aquí para realizar una búsqueda" wire:model="busqueda">
        </div>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
        <tr>
            <th>
                Código
            </th>
            <th>
                Descripción
            </th>
            <th>
                U/M
            </th>
            <th>
                Almacén
            </th>
            <th>
                Existencia en almacén
            </th>
            <th>
                Opciones
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>
                    {{$producto -> codigo_producto}}
                </td>
                <td>
                    {{$producto -> descripcion_producto}}
                </td>
                <td>
                    {{$producto -> unidad_de_medida}}
                </td>
                <td>
                    {{$producto -> almacen}}
                </td>
                <td>
                    {{$producto -> existencia_en_almacen}}
                </td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{route('orden.create_alt', $producto)}}">Elaborar orden</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$productos->links()}}
</div>
