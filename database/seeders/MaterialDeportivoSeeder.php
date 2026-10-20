<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaterialDeportivo;

class MaterialDeportivoSeeder extends Seeder
{
    public function run(): void
    {
        MaterialDeportivo::create([
            'nombre' => 'Mancuerna 10kg',
            'categoria' => 'Pesas',
            'estado_fisico' => 'Bueno',
            'cantidad_inventario' => 10,
            'cantidad_disponible' => 10,
            'estatus' => 'Disponible',
        ]);

        MaterialDeportivo::create([
            'nombre' => 'Pelota de yoga',
            'categoria' => 'Funcional',
            'estado_fisico' => 'Bueno',
            'cantidad_inventario' => 5,
            'cantidad_disponible' => 5,
            'estatus' => 'Disponible',
        ]);

        MaterialDeportivo::create([
            'nombre' => 'Cuerda para saltar',
            'categoria' => 'Cardio',
            'estado_fisico' => 'Bueno',
            'cantidad_inventario' => 8,
            'cantidad_disponible' => 8,
            'estatus' => 'Disponible',
        ]);

        MaterialDeportivo::create([
            'nombre' => 'Colchoneta',
            'categoria' => 'Funcional',
            'estado_fisico' => 'Deteriorado',
            'cantidad_inventario' => 12,
            'cantidad_disponible' => 12,
            'estatus' => 'Disponible',
        ]);

        MaterialDeportivo::create([
            'nombre' => 'Banda de resistencia',
            'categoria' => 'Funcional',
            'estado_fisico' => 'Bueno',
            'cantidad_inventario' => 15,
            'cantidad_disponible' => 15,
            'estatus' => 'Disponible',
        ]);
    }
}

