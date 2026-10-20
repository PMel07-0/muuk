<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membresia;
use App\Models\TipoMembresia;
use Illuminate\Support\Carbon;

class MembresiaSeeder extends Seeder
{
    public function run(): void
    {
        // Mir - Mensual
        $tipo = TipoMembresia::find(1); // Mensual, 30 días
        $fechaInicio = Carbon::parse('2026-10-01');

        Membresia::create([
            'cliente_idCliente' => 1,
            'tipoMembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias), // ← cálculo
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);

        // Naye - Trimestral
        $tipo = TipoMembresia::find(2); // Trimestral, 90 días
        $fechaInicio = Carbon::parse('2026-08-15');

        Membresia::create([
            'cliente_idCliente' => 2,
            'tipoMembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias),
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);

        // Fer - Anual
        $tipo = TipoMembresia::find(4); // Anual, 365 días
        $fechaInicio = Carbon::parse('2026-01-10');

        Membresia::create([
            'cliente_idCliente' => 5,
            'tipoMembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias),
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);
    }
}
