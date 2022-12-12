@extends('plantillas.plantilla')

@section('titulo', 'Productos')
@section('contenido')
@section('btn-productos', 'active')
@section('titulo_principal', 'Productos')

@section('clase_tabla', 'card')
@section('nombre_tabla', 'Listado de productos')
@section('tabla')
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
                        {{$producto -> descripcion}}
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
                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
@endsection



