<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Prestamo;
use App\Models\DetallePrestamo;

class PrestamosCards extends StatsOverviewWidget
{

    protected static ?int $sort=1; 

    protected function getStats(): array
    {
        $totalPrestamos = Prestamo::count();
        $activo = Prestamo::where('estado', 'Activo')->count();
        $completado = Prestamo::where('estado', 'Completado')->count();

        $materialesPrestados = DetallePrestamo::where('estado', 'Prestado')->count();
        $materialesDevueltos = DetallePrestamo::where('estado', 'Devuelto')->count();

        return [
            Stat::make('Préstamos por cliente:', $totalPrestamos)
                ->icon('heroicon-o-clipboard-document-list')
                ->description("Préstamos activos: $activo | Préstamos completados: $completado"),
            Stat::make('Total de Materiales Prestados:', $materialesPrestados + $materialesDevueltos)
                ->icon('heroicon-o-wrench-screwdriver')
                ->description("Prestados: $materialesPrestados | Devueltos: $materialesDevueltos"),
        ];
    }

     protected function getColumns(): int{
        return 1;
    }

}
