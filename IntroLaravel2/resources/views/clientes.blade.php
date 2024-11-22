@extends('layouts.plantilla1')

  @section('contenido')
 
<div class="container mt-5 col-md-8">
    @foreach ($consultaClientes as $cliente)
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
    {{ $cliente->nombre}}
</div>
<div class="card-body">
    <h5 class="fw-bold">{{ $cliente->apellido}}</h5>
    <h5 class="fw-medium">{{ $cliente->correo}}</h5>
    <h5 class="fw-medium">{{ $cliente->telefono}}</h5>
    <p class="card-text fw-ligther"></p>
</div>
<div class="card-footer  text-muted">
    <!-- En esta línea se usa la ruta editarclientes.edit y se le pasa el parametro del id del cliente
      para que sólo redireccione con esos datos y no con todo lo que existe en la tabla-->
    <a href="{{ route('editarclientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Actualizar</a> 
    <!--Se usan las propiedades data-id y data-nombre para que puedan ser utilizadas en el método de eliminación
    y se muestren en el msj de confirmación-->
    <button type="submit" class="btn btn-danger btn-sm btn-eliminar" data-id="{{ $cliente->id}}" data-nombre="{{ $cliente->nombre}}">Eliminar</button>
</div>
</div>
@endforeach

@if (session('exito'))

    <script>
        Swal.fire({
            title: "Éxito",
            text: '{{ session("exito") }}',
            icon: "success"
            confirmButtonText: "Aceptar"
        });
    </script>
@endif

@if (session('error'))

    <script>
        Swal.fire({
            title: "Error",
            text: '{{ session("error") }}',
            icon: "error"
            confirmButtonText: "Aceptar"
        });
    </script>
@endif
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.btn-eliminar').forEach(button => {
    button.addEventListener('click', function () {
        const clienteId = this.getAttribute('data-id');
        const clienteNombre = this.getAttribute('data-nombre');

        Swal.fire({
            title: '¿Estás seguro?',
            text: `Vas a eliminar al cliente: ${clienteNombre}`, //Pasa el nombre al mensaje de confirmación
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#df0a0a', //Color del botón de confirmación
            cancelButtonColor: '#17202a', //Color del botón de cancelación
            confirmButtonText: 'Sí, eliminar', //Texto de la confirmación
            cancelButtonText: 'Cancelar' //Texto de la cancelación
        }).then((result) => {
            if (result.isConfirmed) { //Si se presiona el botón de confirmación entonces entra al fetch y manda la orden DELETE
                fetch(`/cliente/${clienteId}/delete`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                .then(response => response.json()) // Convierte la respuesta en JSON
                .then(data => {
                    if (data.success) {
                        Swal.fire(
                            'Eliminado',
                            data.message, // Mensaje que pusimos en el controlador
                            'success'
                        ).then(() => {
                            location.reload(); // Recarga la página para reflejar los cambios
                        });
                    } else {
                        Swal.fire(
                            'Error',
                            data.message, // Mensaje que pusimos en el controlador
                            'error'
                        );
                    }
                })
                .catch(error => { //catch para errores
                    Swal.fire(
                        'Error',
                        'Ocurrió un error inesperado al procesar la solicitud.',
                        'error'
                    );
                });
            }
        });
    });
});
</script>
@endsection
