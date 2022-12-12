@extends('plantillas.plantilla')

@section('titulo', 'Elaborar plan')

@section('contenido')
@section('btn-planes', 'active')
@section('titulo_principal','Elaborar plan de distribución')

@section('sub-menu')
    <a class="btn btn-link" href="{{route('plan.create')}}">Elaborar plan de distribución</a>
    <a class="btn btn-link" href="{{route('plan.index')}}">Listar planes de distribución</a>
@endsection

@section('clase_form', 'card')
@section('formulario')
    <form class="row g-3 needs-validation" novalidate action="{{route('plan.store')}}" method="post">
        <x-form-plan :entidades="$entidades"/>
    </form>
@endsection
