<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Empleado inicio</title>
</head>
<body>
  <main>
    <div>
      <a class="btn btn-primary" href="{{ route('empleados.registro') }}">Ver Empleados</a>
      <a class="btn btn-primary" href="{{ route('empleados.crear.form') }}">Crear Empleado</a>
    </div>
  </main>
</body>
</html>