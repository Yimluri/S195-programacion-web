
 @extends('layouts.plantilla1')

  @section('contenido')
  <!-- formulario -->
    <div class="container mt-5">
      @dump($id)
      <div class="card">
    <div class="card text-center">
    <div class="card-header">
    Registro de Clientes
    </div>

  <div class="card-body">
  <form action="/enviar" method="POST">
    @csrf 
  <div class="mb-3">

  <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
  <input type="text" class="form-control" id= "" name="txtnombre">
  </div>

  <div class="mb-3">
    <label for="Apellido" class="form-label">Apellido:</label>
    <input type="text" class="form-control" id= "" name="txtapellido">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Correo:</label>
    <input type="mail" class="form-control" id= "" name="txtCorreo">
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono:</label>
    <input type="num" class="form-control" id= "" name="txtTelefono">
  </div>

  </div>

  <div class="card-footer text-body-secondary">
   <button type="submit" class="btn btn-primary">Guardar</button>

  </form>
  </div>
  </div>
  </div>

  @endsection

