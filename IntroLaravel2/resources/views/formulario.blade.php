
 @extends('layouts.plantilla1')

  @section('contenido')
  <!-- formulario -->
    <div class="container mt-5">
      @if (session('exito'))
      <x-Alert tipo="success">{{ session('exito') }}</x-Alert>
      @endif
      @session('exito')

      @endsession
      @session('exito')
      <script> 
        Swal.fire({
          title: "Respuesta del servidor",
          text: '{{ $value }}',
          icon: "success"
        });
      </script>
      @endsession
      <div class="card">
    <div class="card text-center">
    <div class="card-header">
    Registro de Clientes
    </div>

  <div class="card-body">
  <form action="{{ route('procesar') }}" method="POST">
    @csrf <!-- seguridad -->
  <div class="mb-3">

  <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
  <input type="text" class="form-control" id= "" name="txtnombre">
  <small class="text-danger fst-italic">{{  $errors->first('txtnombre')  }}</small>
  </div>

  <div class="mb-3">
    <label for="Apellido" class="form-label">Apellido:</label>
    <input type="text" class="form-control" id= "" name="txtapellido">
    <small class="text-danger fst-italic">{{  $errors->first('txtapellido')  }}</small>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Correo:</label>
    <input type="text" class="form-control" id= "" name="txtcorreo">
    <small class="text-danger fst-italic">{{  $errors->first('txtcorreo')  }}</small>
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono:</label>
    <input type="text" class="form-control" id= "" name="txttelefono">
    <small class="text-danger fst-italic">{{  $errors->first('txttelefono')  }}</small>
  </div>

  </div>

  <div class="card-footer text-body-secondary">
   <button type="submit" class="btn btn-primary">{{ __('Guardar Cliente')}}</button>

  </form>
  </div>
  </div>
  </div>

  @endsection

