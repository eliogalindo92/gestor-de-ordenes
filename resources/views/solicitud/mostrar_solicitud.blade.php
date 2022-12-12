@extends('plantillas.plantilla')

@section('titulo', 'Solicitudes')
@section('btn-solicitudes', 'active')

@section('contenido')
@section('titulo_principal', 'Solicitudes de productos')

@section('clase_tabla', 'card')
@section('nombre_tabla', 'Listado de solicitudes')
@section('tabla')
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
                    Opciones
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
                            @if($solicitud->id == $entidad->id)
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
                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
@endsection
