@extends('layouts.plantilla1')

@section('contenido')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            Reportes de Clientes
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Descripción</th>
                        <th>Estatus</th>
                        <th>Fecha del Reporte</th>
                        <th>Creado en</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reportes as $reporte)
                        <tr>
                            <td>{{ $reporte->reporte_id }}</td>
                            <td>{{ $reporte->nombre }} {{ $reporte->apellido }}</td>
                            <td>{{ $reporte->correo }}</td>
                            <td>{{ $reporte->telefono }}</td>
                            <td>{{ $reporte->descripcion }}</td>
                            <td>{{ ucfirst($reporte->estatus) }}</td>
                            <td>
                                @if ($reporte->fecha_reporte)
                                    {{ $reporte->fecha_reporte->format('d-m-Y H:i') }}
                                @else
                                    No disponible
                                @endif
                            </td>
                            <td>
                                @if ($reporte->created_at)
                                    {{ $reporte->created_at->format('d-m-Y H:i') }}
                                @else
                                    No disponible
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
