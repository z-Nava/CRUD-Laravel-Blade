<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Gestion clientes</title>
</head>
<body>
    <h1>Servicio de gestion</h1>
    <div class="container">
       <h4>Gestion de cliente</h4>
       <div class="row">
        <div class="col-xl-12">
            <form action="{{route('cliente.index')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-4 my-1">
                        <input type="text" name="texto" class="form-control" placeholder="Busqueda de clientes" value="{{$texto}}">
                    </div>
                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                    <div class="col-auto my-1">
                        <a href="{{route('cliente.create')}}" class="btn btn-success">Nuevo</a>
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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Departamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($clientes) <= 0)
                        <tr>
                                 <td colspan="7">No hay registros</td>
                        </tr>
                           @else
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td><a href="{{route('cliente.edit', $cliente->id)}}" class="btn btn-warning btn-sm"> EDITAR </a>
                             <form action="{{route('cliente.destroy', $cliente->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="ELIMINAR">
                            </td>
                            <td>{{$cliente -> id}}</td>
                            <td>{{$cliente -> nombre}}</td>
                            <td>{{$cliente -> apellido}}</td>
                            <td>{{$cliente -> email}}</td>
                            <td>{{$cliente -> telefono}}</td>
                            <td>{{$cliente -> departamento_id}}</td>
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