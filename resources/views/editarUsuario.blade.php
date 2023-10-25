<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edici&oacute;n de nuevos usuarios</h1>
    
    <form method="POST" action="{{ route('usuario.update', $usuario->usuario) }}">

        @csrf
        @method('PUT')

        <div class="row">

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" readonly value={{$usuario->usuario}}>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value={{$usuario->nombre}}>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value={{$usuario->apellido}}>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo" id="correo" value={{$usuario->correo}}>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" value={{$usuario->telefono}}>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" value={{$usuario->password}}>
              </div>

              <button type="submit" class="btn btn-success">Guardar</button>
              <a class="btn btn-primary" href="{{ route('usuario.inicio') }}">Regresar</a>

        </div>

    </form>

</body>
</html>