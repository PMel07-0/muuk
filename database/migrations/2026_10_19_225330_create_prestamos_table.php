<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('idPrestamo');
            $table->foreignId('cliente_idCliente')
                 ->constrained('clientes', 'idCliente');
            $table->date('fechaPrestamo');
            $table->string('estado')->default('Activo'); // Activo / Completado
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};