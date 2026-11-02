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
    }
}

