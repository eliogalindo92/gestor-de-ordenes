@extends('plantillas.plantilla')

@section('titulo', 'Solicitudes')
@section('btn-solicitudes', 'active')

@section('contenido')
@section('titulo_principal', 'Solicitudes de productos')

@section('clase_tabla', 'card')
@section('nombre_tabla', 'Listado de solicitudes')
@section('tabla')
    @livewire('mostrar-solicitud')
@endsection
@endsection
