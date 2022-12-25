@extends('plantillas.plantilla')

@section('titulo', 'Editar orden')

@section('contenido')
    @section('btn-ordenes', 'active')
    @section('titulo_principal','Editar orden de despacho')

    @section('sub-menu')
{{--        <a class="btn btn-sm btn-outline-dark" href="{{route('orden.create')}}">Elaborar orden</a>--}}
        <a class="btn btn-sm btn-outline-dark" href="{{route('orden.index')}}">Listar órdenes</a>
    @endsection

    @section('clase_form', 'card')
    @section('formulario')
        <form class="row g-3" action="{{route('orden.update', $orden)}}" method="post">
            @method('put')
            <x-form-orden :entidades="$entidades" :productos="$productos" :orden="$orden"/>
        </form>
    @endsection
@endsection

