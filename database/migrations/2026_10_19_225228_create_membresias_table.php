<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('membresias', function (Blueprint $table) {
            $table->id('idMembresia');
            $table->foreignId('cliente_idCliente')
                  ->constrained('clientes', 'idCliente');
            $table->foreignId('tipoMembresia_idTipoMembresia')
                  ->constrained('tipo_membresia', 'idTipoMembresia');
            $table->date('fechaInicio');
            $table->date('fechaFin');          
            $table->decimal('pago', 10, 2);    
            $table->string('vigencia')->default('Vigente'); 
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('membresias');
    }
};