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
    @livewire('gestionar-plan')
    @endsection

