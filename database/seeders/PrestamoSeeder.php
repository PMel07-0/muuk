<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestamo;

class PrestamoSeeder extends Seeder
{
    public function run(): void
    {
        Prestamo::firstOrCreate([
            'cliente_idCliente' => 1,
            'fechaPrestamo' => '2026-10-18',
            'estado' => 'Activo',
        ]);

        Prestamo::firstOrCreate([
            'cliente_idCliente' => 2,
            'fechaPrestamo' => '2026-10-10',
            'estado' => 'Completado',
        ]);

        // Préstamo 3 - Carlos
        Prestamo::firstOrCreate([
            'cliente_idCliente' => 3,
            'fechaPrestamo' => '2026-10-12',
            'estado' => 'Activo',
        ]);

        // Préstamo 4 - Sofía
        Prestamo::firstOrCreate([
            'cliente_idCliente' => 4,
            'fechaPrestamo' => '2026-10-15',
            'estado' => 'Completado',
]);

    }
}

