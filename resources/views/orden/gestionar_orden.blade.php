@extends('plantillas.plantilla')

@section('titulo', 'Gestionar órdenes')

@section('contenido')
@section('btn-ordenes', 'active')
@section('titulo_principal','Órdenes de despacho')

@section('sub-menu')
    <a class="btn btn-link">Elaborar orden de despacho</a>
    <a class="btn btn-link">Mostrar órdenes de despacho</a>
@endsection

@section('clase_tabla', 'card')
@section('nombre_tabla', 'Listado de órdenes de despacho')
@section('tabla')
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
       {{-- @foreach ($solicitudes as $solicitud)
            <tr>
                <td>
                    {{$solicitud -> numero_solicitud}}
                </td>
                <td>
                    {{$solicitud -> fecha_solicitud}}
                </td>
                <td>
                    @foreach($entidades as $entidad)
                        @if($solicitud->id_entidad == $entidad->id_entidad)
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
        @endforeach--}}
        </tbody>
    </table>
@endsection
