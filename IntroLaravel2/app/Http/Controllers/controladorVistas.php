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
        //redirección usando la ruta
        //return redirect('/');

        //redirección con nombre de ruta
        //return redirect()->route('clientes');

        $id=[['usuario'=>1],['usuario'=>2]];
        
        return view('formulario', compact('id'));
    }
}


