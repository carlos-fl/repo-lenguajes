<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>Producto crear</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center">
    <form class="form d-flex flex-column" action="{{ route('productos.crear') }}" method="post">
      @method('post')
      @csrf
      <div>
        <label for="descripcion">Descripción</label>
        <input  class="form-control" type="text" name="descripcion" placeholder="descripcion" id="descripcion">
      </div>
      <div>
        <label for="precio">Precio</label>
        <input class="form-control" type="text" name="precio" placeholder="precio" id="precio">
      </div>
      <div>
        <label for="stock">En stock</label>
        <input class="form-control" type="number" name="stock" placeholder="stock" id="stock">
      </div>
      <div>
        <label for="isv">Paga isv</label>
        <input class="form-control" type="number" name="isv" placeholder="paga isv" id="isv" min="0" max="1">
      </div>
      <div>
        <button class="btn btn-primary mt-4">ENVIAR</button>
      </div>
    </form>
  </main>
</body>
</html>