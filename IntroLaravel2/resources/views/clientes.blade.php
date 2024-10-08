<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Consultar Clientes</title>
</head>
<body>
    <!-- inicia navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Turista sin Maps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/formulario">Registro de clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/clientes" style="btn btn-primary">Consultar clientes</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 col-md-8">
<div class= "card text-justify font-monospace">
    <div class="card-header fs-5 text -primary">
    Ivan Isay Guerra
</div>
<div class="card-body">
    <h5 class="fw-bold">ivan.guerra@outlook.com</h5>
<h5 class="fw-medium">4424283836</h5>
<p class="card-text fw-ligther"></p>
</div>
<div class="card-footer  text-muted">
    <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
</div>
</div>




    </body>
</html>