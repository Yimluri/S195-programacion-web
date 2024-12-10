@extends ('layouts.plantillaNav')

   @section('contenido')


    <div class="container">

    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form action="{{ route('procesar') }}" method="post">
        @csrf
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" >
            <small class="text-danger fst-italic">{{ $errors->first('nombre')}}</small>

        </div>

        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="mail" class="form-control" name="correo" >
            <small class="text-danger fst-italic" role="alert">{{ $errors->first('correo')}} </small>
        </div>

        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="telefono" >
            <small class="text-danger fst-italic" role="alert">{{ $errors->first('telefono')}} </small>
        </div>

        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>

   @endsection

</body>
</html>