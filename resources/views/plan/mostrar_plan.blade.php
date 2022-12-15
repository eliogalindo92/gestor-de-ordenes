@extends('plantillas.plantilla')

@section('titulo', 'Editar plan')

@section('contenido')
    @section('btn-planes', 'active')
    @section('titulo_principal','Mostrar plan de distribución ')
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


