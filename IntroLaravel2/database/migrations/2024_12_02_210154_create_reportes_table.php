<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id(); // Identificador único del reporte
            $table->foreignId('cliente_id') // Clave foránea para relacionar con clientes
                  ->constrained('clientes')
                  ->onDelete('cascade'); // Elimina los reportes si se elimina el cliente
            $table->text('descripcion'); // Detalles del reporte
            $table->string('estatus')->default('pendiente'); // Estado del reporte
            $table->timestamp('fecha_reporte')->nullable(); // Fecha del reporte
            $table->timestamps(); // Marcas de tiempo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
