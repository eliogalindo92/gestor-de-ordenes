@extends('plantillas.plantilla')

@section('titulo', 'Gestionar planes')

@section('contenido')
    @section('btn-planes', 'active')
    @section('titulo_principal','Planes de distribución')

    @section('sub-menu')
        <a class="btn btn-link" href="{{route('plan.create')}}">Elaborar plan de distribución</a>
        <a class="btn btn-link" href="{{route('plan.index')}}">Listar planes de distribución</a>
    @endsection

    @section('clase_tabla', 'card')
    @section('nombre_tabla', 'Listado de planes de distribución')
    @section('tabla')
        <table class="table table-stripped table-hover">
            <thead>
            <tr>
                <th>
                    Número
                </th>
                <th>
                    Fecha de distribución
                </th>
                <th>
                    Entidad solicitante
                </th>
                <th>
                    Opciones
                </th>
            </tr>
            </thead>
            <tbody>
             @foreach ($planes as $plan)
                 <tr>
                     <td>
                         {{$plan -> numero_plan}}
                     </td>
                     <td>
                         {{$plan -> fecha_distribucion}}
                     </td>
                     <td>
                         @foreach($entidades as $entidad)
                             @if($plan->id == $entidad->id)
                                 {{$entidad->nombre_entidad}}
                             @endif
                         @endforeach
                     </td>
                     <td>
                         <a href="{{ route('plan.edit', $plan) }}">Editar</a>
                     </td>
                 </tr>
             @endforeach
            </tbody>
        </table>
    @endsection

