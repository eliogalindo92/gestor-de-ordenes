@extends('plantillas.plantilla')

@section('titulo', 'Mostrar orden')

@section('contenido')
    @section('btn-ordenes', 'active')
    @section('titulo_principal','Orden de despacho ')
    @section('sub-menu')
        <a class="btn btn-link" href="{{route('orden.reporte', $orden)}}">Exportar a PDF</a>
        <a class="btn btn-link" href="{{route('orden.index')}}">Listar órdenes de despacho</a>
    @endsection
    @section('clase_form', 'card')
    @section('formulario')
    <ul>
        <li>
           Orden de despacho número: {{$orden->numero_orden}}
        </li>
        <li>
            Fecha de elaboración: {{$orden->fecha_elaboracion}}
        </li>
    </ul>
            <form class="row g-3" action="{{route('orden.destroy', $orden)}}" method="post">
                @csrf
                @method('delete')
                <div class="col-sm-12 text-end">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </div>
            </form>
    @endsection
@endsection


