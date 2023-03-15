<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1>Servicio de gestion</h1>
    <div class="container">
        <h4>Gestion de departamentos</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('departamento.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" placeholder="Nombre" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                        </div>
                        <div class="col-auto my-1">
                        <a href="{{route('departamento.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>FECHA CREACION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($departamentos->isEmpty())
                                <tr>
                                    <td colspan="4">No hay registros</td>
                                </tr>
                            @else
                            @foreach ($departamentos as $departamento)
                                <tr>
                                    <td><a href="{{route('departamento.edit', $departamento->id)}}" class="btn btn-warning btn-sm">EDITAR</a>
                                    <form action="{{route('departamento.destroy', $departamento->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" value="ELIMINAR">
                                        </td>
                                    <td>{{$departamento -> id}}</td>
                                    <td>{{$departamento -> nombre}}</td>
                                    <td>{{$departamento -> fecha_creacion}}</td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>