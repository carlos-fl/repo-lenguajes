<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>Proveedores crear</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center">
    <form class="form d-flex flex-column" action="{{ route('proveedores.crear') }}" method="post">
      @method('post')
      @csrf
      <div>
        <label for="nombre">nombre</label>
        <input  class="form-control" type="text" name="nombre" placeholder="nombre" id="nombre">
      </div>
      <div>
        <label for="fecha">Fecha Registro</label>
        <input class="form-control" type="date" name="fecha" placeholder="fecha" id="fecha">
      </div>
      <div>
        <label for="telefono">Telefono</label>
        <input class="form-control" type="text" name="telefono" placeholder="telefono" id="telefono">
      </div>
      <div>
        <label for="correo">Correo</label>
        <input class="form-control" type="email" name="correo" placeholder="correo" id="correo">
      </div>
      <div>
        <button class="btn btn-primary mt-4">ENVIAR</button>
      </div>
    </form>
  </main>
</body>
</html>