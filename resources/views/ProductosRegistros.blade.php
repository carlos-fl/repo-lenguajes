<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Productos Regristro</title>
</head>
<body>
  <main>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>Paga Isv</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($productos as $producto)
        <tr>
          <td>{{ $producto->id }}</td>
          <td>{{ $producto->descripcion }}</td>
          <td>{{ $producto->precio }}</td>
          <td>{{ $producto->stock }}</td>
          @if ($producto->pagaIsv)
          <td>Sí</td>
          @else
          <td>No</td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
      <a class="btn btn-warning" href="{{ route('productos.inicio') }}">Volver</a>
    </div>
  </main> 
</body>
</html>