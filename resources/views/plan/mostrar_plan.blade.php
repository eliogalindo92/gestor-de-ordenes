@extends('plantillas.plantilla')

@section('titulo', 'Mostrar plan')

@section('contenido')
    @section('btn-planes', 'active')
    @section('titulo_principal','Plan de distribución ')
    @section('sub-menu')
        <a class="btn btn-link" href="{{route('plan.reporte', $plan)}}">Exportar a PDF</a>
        <a class="btn btn-link" href="{{route('plan.index')}}">Listar planes de distribución</a>
    @endsection
    @section('clase_form', 'card')
    @section('formulario')
    <ul>
        <li>
           Plan de distribución número: {{$plan->numero_plan}}
        </li>
        <li>
            Fecha de distribución: {{$plan->fecha_distribucion}}
        </li>
    </ul>
            <form class="row g-3" action="{{route('plan.destroy', $plan)}}" method="post">
                @csrf
                @method('delete')
                <div class="col-sm-12 text-end">
                    <button class="btn btn-danger" type="submit">Eliminar</button>
                </div>
            </form>
    @endsection
@endsection


