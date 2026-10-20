<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetallePrestamo;

class DetallePrestamoSeeder extends Seeder
{
    public function run(): void
    {
        // Préstamo 1 - Miriam: mancuerna y cuerda (aún prestadas)
        DetallePrestamo::create([
            'prestamo_idPrestamo' => 1,
            'material_idMaterial' => 1,
            'cantidad' => 2,
            'estado' => 'Prestado',
            'estado_fisico_devuelto' => null,
            'fechaDevolucion' => null,
        ]);

        DetallePrestamo::create([
            'prestamo_idPrestamo' => 1,
            'material_idMaterial' => 3,
            'cantidad' => 1,
            'estado' => 'Prestado',
            'estado_fisico_devuelto' => null,
            'fechaDevolucion' => null,
        ]);

        // Préstamo 2 - Karen: pelota de yoga (ya devuelta)
        DetallePrestamo::create([
            'prestamo_idPrestamo' => 2,
            'material_idMaterial' => 2,
            'cantidad' => 1,
            'estado' => 'Devuelto',
            'estado_fisico_devuelto' => 'Bueno',
            'fechaDevolucion' => '2026-10-12',
        ]);
    }
}
