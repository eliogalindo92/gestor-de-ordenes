<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{public_path('css/bootstrap.css')}}" type="text/css">
    <title>Orden de despacho en PDF</title>
</head>
<body>
<div class="container-fluid">
    <h3 align="center">Orden de despacho N°:  {{$orden->numero_orden}}</h3>
    <div class="row-content">
        <label><strong>Fecha de elaboración:</strong> <i>{{$orden->fecha_elaboracion}}</i></label>
    </div>
    <div class="row-content">
        @foreach($entidades as $entidad)
            @if($orden->id_entidad == $entidad->id)
                <label><strong>Realizada para:</strong> <i>{{$entidad->nombre_entidad}}</i></label>
            @endif
        @endforeach
    </div>
    <div class="row-content">
        <table class="table table-stripped table-hover">
            <thead>
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
            </thead>
            <tbody>
            <tr>
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
                    {{$orden -> almacen}}
                </td>
                <td>
                    {{$orden -> existencia_en_almacen}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
