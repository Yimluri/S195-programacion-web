<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bienvenido</title>
  
    <style>
        body, html{
            height: 100%;
        }
        .full-height{
            height: 100vh;
        }
        </style>
</head>
<body>

    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">Bienvenido querido Turista!</h1>
        <p>Presiona el botón para iniciar...</p>


         <a href="{{ route('cliente.create') }}" class="btn btn-primary">Ir al Registro</a>  
    </div>

  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>