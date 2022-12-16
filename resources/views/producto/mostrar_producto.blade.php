@extends('plantillas.plantilla')

@section('titulo', 'Productos')
@section('contenido')
@section('btn-productos', 'active')
@section('titulo_principal', 'Productos')

@section('clase_tabla', 'card')
@section('nombre_tabla', 'Listado de productos')
@section('tabla')
@livewire('mostrar-producto')
@endsection
@endsection



