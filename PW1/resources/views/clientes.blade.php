@extends('layouts.plantilla1')

  @section('contenido')
 
<div class="container mt-5 col-md-8">
    @foreach ($consulta as $item)
    @session('exito') <!-- Lo usamos para que aparezca el msj de éxito en esta vista-->
      <script>
        Swal.fire({
            title: "Respuesta del servidor",
            text: '{{ session("exito") }}',
            icon: "success"
        });
    </script>
    @endsession
<div class= "card text-justify font-monospace mt-5">
    <div class="card-header fs-5 text -primary">
    {{ $item->nombre}}
</div>
<div class="card-body">
    <h5 class="fw-bold">{{ $item->apellido}}</h5>
    <h5 class="fw-medium">{{ $item->correo}}</h5>
    <h5 class="fw-medium">{{ $item->telefono}}</h5>
    <p class="card-text fw-ligther"></p>
</div>
<div class="card-footer  text-muted">
<div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-stars"></i> Opciones
            </button>
            <ul class="dropdown-menu">
                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$item->id}}">
                    <i class="bi bi-pencil-square"></i>Editar 
                  </button>
                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                    <i class="bi bi-trash"></i> Borrar 
                  </button>
            </ul>
          </div> 
</div>
</div>
@include('options')
@endforeach

@endsection
