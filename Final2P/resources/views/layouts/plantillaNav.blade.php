<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Plantilla</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Principal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('formulario')?'text-warning':'' }}" aria-current="page" href="{{ route('formulario') }}">Registro de contactos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('contactos')?'text-info':'' }}" aria-current="page" href="{{ route('contactos') }}">Registro de contactos</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  @yield('contenido')

</body>
</html>
