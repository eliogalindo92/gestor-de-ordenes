@csrf
<div class="col-md-2">
    <label for="NumeroOrden" class="form-label">Número de orden *</label>
    <input type="number" class="form-control" name="numero_orden" id="NumeroOrden" min="1" max="10000" value="{{old('numero_orden', $orden->numero_orden)}}">
    @error('numero_orden')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-md-5">
    <label for="IdEntidad" class="form-label">Entidad solicitante *</label>
    <select class="form-select" name="id_entidad" id="IdEntidad">
        <option selected disabled value="0">Seleccione...</option>
        @foreach($entidades as $entidad)
            <option value="{{$entidad->id}}" @selected(old('id_entidad', $orden->id_entidad) == $entidad->id)>{{$entidad->nombre_entidad}}</option>
        @endforeach
    </select>
    @error('id_entidad')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-md-5">
    <label for="FechaElaboracion" class="form-label">Fecha de elaboración *</label>
    <input type="datetime-local" class="form-control" name="fecha_elaboracion" id="FechaElaboracion" value="{{old('fecha_elaboracion', is_null($orden->fecha_elaboracion) ? '' : $orden->fecha_elaboracion->format('Y-m-d\TH:i'))}}">
    @error('fecha_elaboracion')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-md-2">
    <label for="CantidadOrdenada" class="form-label">Cantidad ordenada *</label>
    <input type="number" class="form-control" name="cantidad_ordenada" id="CantidadOrdenada" min="1" max="100000" value="{{old('cantidad_ordenada', $orden->cantidad_ordenada)}}">
    @error('cantidad_ordenada')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-sm-5">
    <label for="CodigoProducto" class="form-label">Código del producto *</label>
    <select class="form-select" name="codigo_producto" id="CodigoProducto">
            <option value="{{$orden->codigo_producto}}" @selected(old('codigo_producto', $orden->codigo_producto) == $orden->codigo_producto)>{{$orden->codigo_producto}}</option>
    </select>
    @error('codigo_producto')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-sm-3">
    <label for="UnidadMedida" class="form-label">Unidad de medida *</label>
    <select class="form-select" name="unidad_de_medida" id="UnidadMedida">
            <option value="{{$orden->unidad_de_medida}}" @selected(old('unidad_de_medida', $orden->unidad_de_medida) == $orden->unidad_de_medida)>{{$orden->unidad_de_medida}}</option>
    </select>
    @error('unidad_de_medida')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-md-2">
    <label for="ExistenciaAlmacen" class="form-label">Existencia en almacén *</label>
    <input type="number" class="form-control" name="existencia_en_almacen" id="ExistenciaAlmacen" min="0" max="100000" value="{{old('existencia_en_almacen', $orden->existencia_en_almacen)}}">
    @error('existencia_en_almacen')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-sm-12">
    <label for="Descripcion" class="form-label">Descripción del producto *</label>
    <textarea name="descripcion_producto" id="Descripcion" cols="30" rows="5" class="form-control">{{old('descripcion_producto', $orden->descripcion_producto)}}</textarea>
    @error('descripcion_producto')
    <small style="color: red">{{$message}}</small>
    @enderror
</div>

<div class="col-sm-12 text-end">
    <button class="btn btn-success" type="submit">Guardar</button>
</div>
