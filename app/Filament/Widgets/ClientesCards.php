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

class ClientesCards extends StatsOverviewWidget
{
    protected static ?int $sort=1; 

    protected function getStats(): array
    {
        $activas = Cliente::where('estatus', 'Activa')-> count();
        $inactivas = Cliente::where('estatus', 'Inactiva')-> count();
        return [
            Stat::make('Total de clientes:', Cliente::count())->icon('heroicon-o-user-circle')
                ->description("Clientes activos: $activas | Clientes inactivos: $inactivas"),
        ];
    }

    protected function getColumns(): int
    {
        return 1;
    }
}
