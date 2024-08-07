<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <h4>Editar clientes</h4>
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('cliente.update', $cliente->id )}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$cliente->nombre}}">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" value="{{$cliente->apellido}}">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="{{$cliente->email}}">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="{{$cliente->telefono}}">
                            <label for="departamento_id">Departamento</label>
                            <input type="text" name="departamento" id="departamento" class="form-control" value="{{$cliente->departamento_id}}">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Guardar" class="btn btn-primary">
                            <input type="reset" value="Cancelar" class="btn btn-danger">
                            <a href="{{route('cliente.index')}}" class="btn btn-info">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>