<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta=cliente::all();
        return view('clientes', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addCliente= new cliente();
        $addCliente->nombre=$request->input('txtnombre');
        $addCliente->apellido=$request->input('txtapellido');
        $addCliente->correo=$request->input('txtcorreo');
        $addCliente->telefono=$request->input('txttelefono');

        $addCliente->save();

        $msj=$request->input('txtnombre');
        session()->flash('exito','Se guardo el cliente'.$msj);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $Cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $Cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $Cliente)
    {
        $Cliente->nombre = $request->input('nombre');
        $Cliente->apellido = $request->input('apellido');
        $Cliente->correo = $request->input('correo');
        $Cliente->telefono = $request->input('telefono');
        $Cliente->save(); // Guardar los cambios

    // Mensaje de éxito
    session()->flash('exito', 'El cliente fue actualizado correctamente.');

    // Redirigir a la vista de clientes
    return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $Cliente)
    {
        $Cliente->delete();

    // Mensaje de éxito
    session()->flash('exito', 'El cliente fue eliminado correctamente.');

    // Redirigir a la vista de clientes
    return redirect()->route('cliente.index');
    }
}
