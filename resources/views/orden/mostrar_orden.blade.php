@extends('plantillas.plantilla')

@section('titulo', 'Mostrar orden')

@section('contenido')
    @section('btn-ordenes', 'active')
    @section('titulo_principal','Orden de despacho ')
    @section('sub-menu')
        <a class="btn btn-sm btn-outline-dark" href="{{route('orden.index')}}">Listar órdenes</a>
        <a class="btn btn-sm btn-outline-dark" href="{{route('orden.reporte', $orden)}}">Exportar a PDF</a>
    @endsection
    @section('clase_form', 'card')
    @section('formulario')
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

            <form class="row g-3" action="{{route('orden.destroy', $orden)}}" method="post">
                @csrf
                @method('delete')
                <div class="col-sm-12 text-end">
                    <button class="btn btn-danger" onclick="" type="submit">Eliminar</button>
                </div>
            </form>
    @endsection
@endsection


