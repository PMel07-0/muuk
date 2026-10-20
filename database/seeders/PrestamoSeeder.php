<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{
    public function run(): void
    {
        // Préstamo 1 - Miriam (activo)
        Prestamo::create([
            'cliente_idCliente' => 1,
            'fechaPrestamo' => '2026-10-18',
            'estado' => 'Activo',
        ]);

        // Préstamo 2 - Karen (completado)
        Prestamo::create([
            'cliente_idCliente' => 2,
            'fechaPrestamo' => '2026-10-10',
            'estado' => 'Completado',
        ]);
    }
}

