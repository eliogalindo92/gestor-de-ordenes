<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{public_path('css/bootstrap.css')}}" type="text/css">
    <title>Plan de distribución en PDF</title>
</head>
<body>
<div class="container-fluid">
    <h3 align="center">Plan de distribución N°:  {{$plan->numero_plan}}</h3>
    <div class="row-content">
        <label><strong>Fecha de elaboración:</strong> <i>{{$plan->created_at}}</i></label>
    </div>
    <div class="row-content">
        @foreach($entidades as $entidad)
            @if($plan->id_entidad == $entidad->id)
                <label><strong>Realizada para:</strong> <i>{{$entidad->nombre_entidad}}</i></label>
            @endif
        @endforeach
    </div>
    <div class="row-content">
        <table class="table table-stripped table-hover">
            <thead>
            <th>
                Fecha de distribución
            </th>
            <th>
                Entidad solicitante
            </th>
            </thead>
            <tbody>
            <tr>
                <td>
                    {{$plan -> fecha_distribucion}}
                </td>
                <td>
                    @foreach($entidades as $entidad)
                        @if($plan->id_entidad == $entidad->id)
                            {{$entidad->nombre_entidad}}
                        @endif
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
