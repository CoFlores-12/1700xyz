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
    
    <h1>ABC de usuarios</h1>


    <div>
        <a class="btn btn-primary" href="{{ route('usuario.crear') }}">Crear Nuevo Usuario</a>
    </div>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Mis publicaciones</th>
            <th scope="col">Crear publicacion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $item)
            <tr>
                <th scope="row">{{$item->usuario}}</th>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->correo}}</td>
                <td><a class="btn btn-primary" href="{{ route('publicacion.ver', $item->usuario) }}">Ver</a></td>
                <td><a class="btn btn-primary" href="{{ route('publicacion.crear', $item->usuario) }}">Crear</a></td>
                <td>
                  <a class="btn btn-success" href="{{ route('usuario.edit', $item->usuario) }}">Editar</a>
                </td>
                <td><a class="btn btn-danger" href="{{ route('usuario.eliminar', $item->usuario) }}">Eliminar</a></td>
              </tr>
            @endforeach
          
        </tbody>
      </table>        

</body>
</html>