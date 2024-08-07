<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion clientes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Servicio de gestion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('departamento.index')}}">Departamentos</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    <div class="container">
       <h4>Gestion de cliente</h4>
       <div class="row">
        <div class="col-xl-12">
            <form action="{{route('cliente.index')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-4 my-1">
                        <input type="text" name="texto" class="form-control" placeholder="Busqueda de clientes" value="{{$texto}}">
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                    <div class="col-auto my-1">
                        <a href="{{route('cliente.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-12">
            <h3>Registros</h3>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>