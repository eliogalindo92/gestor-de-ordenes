@extends('plantillas.plantilla')

@section('titulo', 'Gestionar órdenes')

@section('contenido')
@section('btn-ordenes', 'active')
@section('titulo_principal','Órdenes de despacho')

@section('sub-menu')
    <a class="btn btn-sm btn-outline-dark" href="{{route('orden.create')}}">Elaborar orden</a>
    <a class="btn btn-sm btn-outline-dark" href="{{route('orden.index')}}">Listar órdenes</a>
@endsection

@section('clase_tabla', 'card')
@section('nombre_tabla', 'Listado de órdenes de despacho')
@section('tabla')
@livewire('gestionar-orden')
@endsection
