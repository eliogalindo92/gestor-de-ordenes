<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <title>@yield('titulo')</title>
</head>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('gestor.index')}}">S.G.O.D</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @yield('btn-inicio')" aria-current="page" href="{{route('gestor.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  @yield('btn-productos')" href="{{route('producto.index') }}">Ver productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gestionar órdenes de despacho</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consultar solicitudes de productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consultar planes de distribución</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Creo tabla generada dentro del container-->
        <div class="container shadow bg-white">
            @yield('tabla')
        </div>
    </header>
    @yield('contenido')
</body>
<footer>
    @yield('pie')
</footer>
</html>
