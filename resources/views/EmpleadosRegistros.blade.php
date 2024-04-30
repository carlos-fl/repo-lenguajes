<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Empleados Regristro</title>
</head>
<body>
  <main>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Fecha Ingreso</th>
          <th>Salario</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($empleados as $empleado)
        <tr>
          <td>{{ $empleado->idPrestamo }}</td>
          <td>{{ $empleado->nombre }}</td>
          <td>{{ $empleado->apellido }}</td>
          <td>{{ $empleado->fechaIngreso }}</td>
          <td>{{ $empleado->salario }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
      <a class="btn btn-warning" href="{{ route('empleados.inicio') }}">Volver</a>
    </div>
  </main> 
</body>
</html>