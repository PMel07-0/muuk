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


class MaterialesDeportivosCards extends StatsOverviewWidget
{

    protected static ?int $sort=1; 

    protected function getStats(): array
    {
        $totalInventario = MaterialDeportivo::sum('cantidad_inventario');

        $inventarioPorCategoria = MaterialDeportivo::query()
            ->selectRaw('categoria, SUM(cantidad_inventario) as total')
            ->groupBy('categoria')
            ->pluck('total', 'categoria')
            ->map(fn ($total, $cat) => "{$cat}: {$total} pzas")
            ->join(' | ');

        return [
            Stat::make('Inventario Total de Materiales', $totalInventario)
                ->icon('heroicon-o-archive-box')
                ->description($inventarioPorCategoria ?: 'Sin categorías registradas'),
        ];
    }

     protected function getColumns(): int{
        return 1;
    }

}
