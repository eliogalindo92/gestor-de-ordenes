@extends('plantillas.plantilla')

@section('titulo', 'Elaborar orden')

@section('contenido')
@section('btn-ordenes', 'active')
@section('titulo_principal','Elaborar orden de despacho')

@section('sub-menu')
    <a class="btn btn-link" href="{{route('orden.create')}}">Elaborar orden de despacho</a>
    <a class="btn btn-link" href="{{route('orden.index')}}">Listar órdenes de despacho</a>
@endsection

@section('clase_form', 'card')
@section('formulario')
    <form class="row g-3" action="{{route('orden.store')}}" method="post">
        <x-form-orden :entidades="$entidades" :productos="$productos"/>
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
