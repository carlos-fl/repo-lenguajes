<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Producto inicio</title>
</head>
<body>
  <main>
    <div>
      <a class="btn btn-primary" href="{{ route('productos.registro') }}">Ver Productos</a>
      <a class="btn btn-primary" href="{{ route('productos.crear.form') }}">Crear Producto</a>
    </div>
    <!-- funciona como ir a home (pagina principal de la aplicacion) -->
    <div class="mt-4">
      <a class="btn btn-warning" href="{{ route('inicio') }}">Ir a Inicio</a>
    </div>
  </main>
</body>
</html>