<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    public function home()
    {
        return view('principal');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ListadoContactos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formularioContacto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([

            'nombre' => 'required|min:4',
            'correo' => 'required|email:rfc,dns',
            'telefono' => 'required|min:9'
        ]);

        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
