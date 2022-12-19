@extends('plantillas.plantilla')

@section('titulo', 'Gestionar planes')

@section('contenido')
    @section('btn-planes', 'active')
    @section('titulo_principal','Planes de distribución')

    @section('sub-menu')
        <a class="btn btn-sm btn-outline-dark" href="{{route('plan.create')}}">Elaborar plan</a>
{{--        <a class="btn btn-sm btn-outline-dark" href="{{route('plan.index')}}">Listar planes</a>--}}
    @endsection

    @section('clase_tabla', 'card')
    @section('nombre_tabla', 'Listado de planes de distribución')
    @section('tabla')
    @livewire('gestionar-plan')
    @endsection

