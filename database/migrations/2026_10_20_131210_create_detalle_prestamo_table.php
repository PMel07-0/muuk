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
        Schema::create('detalle_prestamo', function (Blueprint $table) {
            $table->id('idDetallePrestamo');
            $table->foreignId('prestamo_idPrestamo')
                ->constrained('prestamos', 'idPrestamo')
                ->onDelete('cascade');
            $table->foreignId('material_idMaterial')
                ->constrained('materiales_deportivos', 'idMaterial');
            $table->integer('cantidad')->default(1); // cuántas unidades de ese material (RN03)
            $table->string('estado')->default('Prestado'); // Prestado / Devuelto
            $table->string('estado_fisico_devuelto')->nullable(); // RF08
            $table->date('fechaDevolucion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_prestamo');
    }
};
