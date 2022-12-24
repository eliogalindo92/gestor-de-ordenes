@extends('plantillas.plantilla')

@section('titulo', 'Mostrar plan')

@section('contenido')
    @section('btn-planes', 'active')
    @section('titulo_principal','Plan de distribución ')
    @section('sub-menu')
        <a class="btn btn-sm btn-outline-dark" href="{{route('plan.index')}}">Listar planes</a>
        <a class="btn btn-sm btn-outline-dark" href="{{route('plan.reporte', $plan)}}">Exportar a PDF</a>
    @endsection
    @section('clase_form', 'card')
    @section('formulario')
        <div class="container-fluid">
            <h3 align="center">Plan de distribución N°:  {{$plan->numero_plan}}</h3>
            <div class="row-content">
                <label><strong>Fecha de elaboración:</strong> <i>{{$plan->created_at}}</i></label>
            </div>
            <div class="row-content">
                @foreach($entidades as $entidad)
                    @if($plan->id_entidad == $entidad->id)
                        <label><strong>Realizada para:</strong> <i>{{$entidad->nombre_entidad}}</i></label>
                    @endif
                @endforeach
            </div>
            <div class="row-content">
                <table class="table table-stripped table-hover">
                    <thead>
                    <th>
                        Fecha de distribución
                    </th>
                    <th>
                        Entidad solicitante
                    </th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            {{$plan -> fecha_distribucion}}
                        </td>
                        <td>
                            @foreach($entidades as $entidad)
                                @if($plan->id_entidad == $entidad->id)
                                    {{$entidad->nombre_entidad}}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
            <form class="row g-3" action="{{route('plan.destroy', $plan)}}" method="post">
                @csrf
                @method('delete')
                <div class="col-sm-12 text-end">
                    <button class="btn btn-danger" onclick="" type="submit">Eliminar</button>
                </div>
            </form>
    @endsection
@endsection


