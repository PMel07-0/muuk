<?php

namespace Database\Seeders;

use App\Models\MaterialDeportivo;
use Illuminate\Database\Seeder;

class MaterialDeportivoSeeder extends Seeder
{
    public function run(): void
    {
        $materiales = [
            [
                'nombre' => 'Mancuerna 10kg',
                'categoria' => 'Pesas',
                'estado_fisico' => 'Bueno',
                'cantidad_inventario' => 10,
                'estatus' => 'Disponible',
            ],
            [
                'nombre' => 'Pelota de yoga',
                'categoria' => 'Funcional',
                'estado_fisico' => 'Bueno',
                'cantidad_inventario' => 5,
                'estatus' => 'Disponible',
            ],
            [
                'nombre' => 'Cuerda para saltar',
                'categoria' => 'Cardio',
                'estado_fisico' => 'Bueno',
                'cantidad_inventario' => 8,
                'estatus' => 'Disponible',
            ],
            [
                'nombre' => 'Colchoneta',
                'categoria' => 'Funcional',
                'estado_fisico' => 'Deteriorado',
                'cantidad_inventario' => 12,
                'estatus' => 'Disponible',
            ],
            [
                'nombre' => 'Banda de resistencia',
                'categoria' => 'Funcional',
                'estado_fisico' => 'Bueno',
                'cantidad_inventario' => 15,
                'estatus' => 'Disponible',
            ],
        ];

        foreach ($materiales as $material) {
            MaterialDeportivo::firstOrCreate(
                ['nombre' => $material['nombre']],
                $material
            );
        }
    }
}
