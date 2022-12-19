@extends('plantillas.plantilla')

@section('titulo', 'Elaborar orden')

@section('contenido')
    @section('btn-ordenes', 'active')
    @section('titulo_principal','Elaborar orden de despacho')

    @section('sub-menu')
{{--        <a class="btn btn-sm btn-outline-dark" href="{{route('orden.create')}}">Elaborar orden</a>--}}
        <a class="btn btn-sm btn-outline-dark" href="{{route('orden.index')}}">Listar órdenes</a>
    @endsection

    @section('clase_form', 'card')
    @section('formulario')
        <form class="row g-3" action="{{route('orden.store')}}" method="post">
            <x-form-orden-alt :producto="$producto" :entidades="$entidades"/>
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

