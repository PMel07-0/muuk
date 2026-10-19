<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materiales_deportivos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('categoria');
            $table->integer('cantidad_total');
            $table->integer('cantidad_disponible');
            $table->string('estado')->default('bueno');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('materiales_deportivos');
    }
};