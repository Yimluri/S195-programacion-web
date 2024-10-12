@extends('layouts.plantilla1')

@section('titulo','Componentes Blade')

@section('contenido')

<x-Card encabezado="Hola Jimena" titulo="titulo1" textoBoton="guardar"> un gato </x-Card>
<x-Card encabezado="Hola S195" titulo="titulo2" textoBoton="guardar"> otro gato </x-Card>
<x-Alert tipo="info"> Alert azul</x-Alert>
<x-Alert tipo="danger"> Alert rojo</x-Alert>

@endsection

