<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoMembresia;

class TipoMembresiaSeeder extends Seeder
{
    public function run(): void
    {
        TipoMembresia::create([
            'nombre' => 'Mensual',
            'descripcion' => 'Acceso al gimnasio por un mes',
            'costo' => 350.00,
            'duracion_dias' => 30,
            'estatus' => 'Activo',
        ]);

        TipoMembresia::create([
            'nombre' => 'Trimestral',
            'descripcion' => 'Acceso al gimnasio por tres meses',
            'costo' => 900.00,
            'duracion_dias' => 90,
            'estatus' => 'Activo',
        ]);

        TipoMembresia::create([
            'nombre' => 'Semestral',
            'descripcion' => 'Acceso al gimnasio por seis meses',
            'costo' => 1600.00,
            'duracion_dias' => 180,
            'estatus' => 'Activo',
        ]);

        TipoMembresia::create([
            'nombre' => 'Anual',
            'descripcion' => 'Acceso al gimnasio por un año',
            'costo' => 3000.00,
            'duracion_dias' => 365,
            'estatus' => 'Activo',
        ]);
    }
}
