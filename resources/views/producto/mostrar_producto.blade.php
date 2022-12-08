@extends('template.plantilla')

@section('titulo', 'Productos')
@section('btn-productos', 'active')
@section('contenido')
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
                    Unidad de medida
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
                        {{$producto -> codigo}}
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



