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

            $table->string('tipo');
            $table->text('descripcion')->nullable();

            $table->decimal('costo', 10, 2)->default(0.00);

            $table->date('fechaInicio');
            $table->date('fechaFin');

            $table->string('vigencia')->default('Vigente');

            $table->foreignId('cliente_idCliente')
                  ->constrained('cliente', 'idCliente');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('membresias');
    }
};