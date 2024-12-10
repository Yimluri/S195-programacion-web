<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Realizar un join para obtener los reportes junto con la información del cliente
        $reportes = DB::table('reportes')
            ->join('clientes', 'reportes.cliente_id', '=', 'clientes.id')
            ->select(
                'reportes.id as reporte_id',
                'clientes.nombre',
                'clientes.apellido',
                'clientes.correo',
                'clientes.telefono',
                'reportes.descripcion',
                'reportes.estatus',
                'reportes.fecha_reporte',
                'reportes.created_at'
            )
            ->get();

        // Convertir las fechas a objetos Carbon si es necesario
        foreach ($reportes as $reporte) {
            $reporte->created_at = $reporte->created_at ? Carbon::parse($reporte->created_at) : null;
            $reporte->fecha_reporte = $reporte->fecha_reporte ? Carbon::parse($reporte->fecha_reporte) : null;
        }

        return view('reportes', compact('reportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
