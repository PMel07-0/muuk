<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materiales_deportivos', function (Blueprint $table) {
            $table->id('idMaterial');
            $table->string('nombre');
            $table->string('categoria');
            $table->string('estado_fisico')->default('Bueno'); 
            $table->integer('cantidad_inventario')->default(0); 
            $table->integer('cantidad_disponible')->default(0); 
            $table->string('estatus')->default('Disponible');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('materiales_deportivos');
    }
};