<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--Livewire-->
    @livewireStyles
    <title>@yield('titulo')</title>
</head>
<body class="bg-light" id="cuerpo_pagina">
@yield('contenido')
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('gestor.index')}}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @yield('btn-inicio')" aria-current="page" href="{{route('gestor.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('btn-productos')" href="{{route('producto.index') }}">Consultar disponibilidad  de productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('btn-solicitudes')" href="{{route('solicitud.index')}}">Consultar solicitudes de productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('btn-planes')" href="{{route('plan.index')}}">Gestionar planes de distribución</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('btn-ordenes')" href="{{route('orden.index')}}">Gestionar órdenes de despacho</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="container-fluid" id="carrusel">
    <div class="row-content">
    @yield('carrusel')
    </div>
</div>

    <!--Creo sub-menú y tabla generada dentro del container-->
    <div class="container-fluid shadow bg-white" id="contenido_principal">
        <h2>
            @yield('titulo_principal')
        </h2>

        <div class="col-sm-12">
            @yield('sub-menu')
        </div>

        <div class="@yield('clase_form')" id="form">
            @yield('formulario')
        </div>

        <div class="@yield('clase_tabla')" id="card_tabla">
            <h4 id="nombre_tabla">
                @yield('nombre_tabla')
            </h4>
            @yield('alerta')
            @yield('tabla')
        </div>
    </div>
</body>

<footer>
    @yield('pie')
</footer>
@livewireScripts
</html>
