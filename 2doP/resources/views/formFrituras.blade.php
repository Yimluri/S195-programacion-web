<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')


</head>
<body>

    <h1 class="text-center text-success mt-5 mb-4">Registro Frituras</h1>

    <div class="container col-md-5">

    <form action="/enviar" method="POST">

        <div class="mb-3">
            <label  class="form-label">Nombre: </label>
            <input type="text" name="nombre" class="form-control" >
        </div>

        <div class="mb-3">
            <label class="form-label">Sabor(s): </label>
            <input type="text" name="sabor" class="form-control" >
        </div>                

        <div class="mb-3">
            <label  class="form-label">Peso: </label>
            <input type="text" name="peso" class="form-control"  >
        </div>

        <button type="" class="btn btn-primary "> Guardar Fritura</button>
</div>

</body>
</html>