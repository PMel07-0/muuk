<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Cliente;
use App\Models\DetallePrestamo;
use App\Models\MaterialDeportivo;
use App\Models\Membresia;
use App\Models\Prestamo;
use App\Models\TipoMembresia;

class MembresiasCards extends StatsOverviewWidget
{
    protected static ?int $sort=1; 

    protected function getStats(): array
    {
        $vigentes = Membresia::whereDate('fechaFin', '>=', now())->count();
        $vencidas = Membresia::whereDate('fechaFin', '<', now())->count();

        $tipos = TipoMembresia::withCount('membresias')->get();

        $descripcion = $tipos
        ->map(fn ($tipo) => "{$tipo->nombre}: {$tipo->membresias_count}")
        ->implode(' | ');

        return [
            Stat::make('Total de membresías:', Membresia::count())
                ->icon('heroicon-o-calendar-days')
                ->description("Membresías vigentes: $vigentes | Membresías vencidas: $vencidas"),
            Stat::make('Tipos de membresías', Membresia::count())
                ->icon('heroicon-o-calendar')
                ->description($descripcion),
        ];
    }

    protected function getColumns(): int
    {
        return 1;
    }
}
