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
        $tipo = TipoMembresia::find(1); 
        $fechaInicio = Carbon::parse('2026-10-01');

        Membresia::firstOrCreate([
            'cliente_idCliente' => 1,
            'tipoMembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias), // ← cálculo
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);

        // Naye - Trimestral
        $tipo = TipoMembresia::find(2); 
        $fechaInicio = Carbon::parse('2026-08-15');

        Membresia::firstOrCreate([
            'cliente_idCliente' => 2,
            'tipoMembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias),
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);

        //Max - Semestral
        $tipo = TipoMembresia::find(3);
        $fechaInicio = Carbon::parse('2026-02-15');

        Membresia::firstOrCreate([
            'cliente_idCliente' => 3,
            'tipomembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias),
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);

        // Pao - Anual
        $tipo = TipoMembresia::find(4);
        $fechaInicio = Carbon::parse('2026-03-01');

        Membresia::firstOrCreate([
            'cliente_idCliente' => 4,
            'tipomembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias),
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);

        // Fer - Anual
        $tipo = TipoMembresia::find(4); 
        $fechaInicio = Carbon::parse('2026-01-10');

        Membresia::firstOrCreate([
            'cliente_idCliente' => 5,
            'tipoMembresia_idTipoMembresia' => $tipo->idTipoMembresia,
            'fechaInicio' => $fechaInicio,
            'fechaFin' => $fechaInicio->copy()->addDays($tipo->duracion_dias),
            'pago' => $tipo->costo,
            'vigencia' => 'Vigente',
        ]);
    }
}
