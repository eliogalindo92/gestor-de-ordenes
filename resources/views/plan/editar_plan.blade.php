@extends('plantillas.plantilla')

@section('titulo', 'Editar plan')

@section('contenido')
    @section('btn-planes', 'active')
    @section('titulo_principal','Editar plan de distribución')

    @section('sub-menu')
        <a class="btn btn-link" href="{{route('plan.create')}}">Elaborar plan de distribución</a>
        <a class="btn btn-link" href="{{route('plan.index')}}">Listar planes de distribución</a>
    @endsection

    @section('clase_form', 'card')

    @section('formulario')
        <form class="row g-3" action="{{route('plan.update', $plan)}}" method="post">
            @method('put')
            <x-form-plan :entidades="$entidades" :plan="$plan"/>
        </form>
    @endsection
    @section('alerta')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endsection
@endsection

