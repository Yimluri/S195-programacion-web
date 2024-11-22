@extends('layouts.plantilla1')

  @section('contenido')
  <div class="container mt-5">
    <div class="card">
    <div class="card text-center">
      <div class="card-header">
    Registro de Clientes
    </div>
  <div class="card-body">
  <!-- Se indica que se quieren pasar los datos por post a través de la ruta clientes.update-->
  <form action="{{ route('clientes.update') }}" method="POST">
  <!-- Este espacio escondido es para traer 
  los datos a través de la variable consultaClientes dónde el id es el que seleccionamos-->
  <input type="hidden" name="id" value="{{ $consultaClientes->id }}">
    @csrf <!--Token de seguridad-->
  <div class="mb-3"> 

  <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
  <input type="text" class="form-control" id= "" name="txtnombre" value="{{ old('txtnombre', $consultaClientes->nombre) }}">
  <small class="text-danger fst-italic">{{  $errors->first('txtnombre')  }}</small>
  </div>

  <div class="mb-3">
    <label for="Apellido" class="form-label">Apellido:</label>
    <input type="text" class="form-control" id= "" name="txtapellido" value="{{ old('txtapellido', $consultaClientes->apellido) }}">
    <small class="text-danger fst-italic">{{  $errors->first('txtapellido')  }}</small>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Correo:</label>
    <input type="text" class="form-control" id= "" name="txtcorreo" value="{{ old('txtcorreo', $consultaClientes->correo) }}">
    <small class="text-danger fst-italic">{{  $errors->first('txtcorreo')  }}</small>
  </div>

  <div class="mb-3">
    <label for="telefono" class="form-label">Telefono:</label>
    <input type="text" class="form-control" id= "" name="txttelefono" value="{{ old('txttelefono', $consultaClientes->telefono) }}">
    <small class="text-danger fst-italic">{{  $errors->first('txttelefono')  }}</small>
  </div>

  </div>

  <div class="card-footer text-body-secondary">
   <button type="submit" class="btn btn-primary">{{ __('Actualizar Cliente')}}</button>

  </form>
  </div>
  </div>
    </div>
    </div>
    </div>
    </div>

  @endsection

