<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function formulario()
    {
        return view('formulario');
    }
    public function consulta()
    {
        return view('clientes');
    }
    public function procesarCliente(Request $solicitud)
    {
        //return ('Llego tu formulario al controlador');

        //imprimimos todo lo que viene en la solicitud
        //return $solicitud->all();

        //Imprimimos la ruta donde viene la solicitud
        //return $solicitud->path();

        //verifica de donde viene la petición pero ahora si con la ruta completa
        //return $solicitud->url();

        //Muestra la IP
        return $solicitud->ip();
    }
}


