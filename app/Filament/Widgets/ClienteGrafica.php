<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Cliente;
use App\Models\DetallePrestamo;
use App\Models\MaterialDeportivo;
use App\Models\Membresia;
use App\Models\Prestamo;
use App\Models\TipoMembresia;

class ClienteGrafica extends ChartWidget
{
    protected ?string $heading = 'Estados de Clientes';

    protected function getData(): array
    {

        $activas = Cliente::where('estatus', 'Activa')-> count();
        $inactivas = Cliente::where('estatus', 'Inactiva')-> count();

        return [
            'datasets' => [
                [
            'label' => 'Total de Clientes',
                    'data' => [$activas, $inactivas],
                    'backgroundColor' => ['#FF00FF', '#38BDF8'],
                ],
            ],
            'labels' => ['Activa', 'Inactiva'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
