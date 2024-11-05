<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{
    public function resultados(Request $peticion){

        $validate = $peticion->validate([

            'nombre' => 'required',
            'sabor' => 'required',
            'peso' => 'required'
        ]);

        return $peticion->all();
    }
    public function abrirFormulario(){

        return view('formFrituras');
    }

}
