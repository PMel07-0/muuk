<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Cliente;
use App\Models\DetallePrestamo;
use App\Models\MaterialDeportivo;
use App\Models\Membresia;
use App\Models\Prestamo;
use App\Models\TipoMembresia;

class MaterialesDeportivosGrafica extends ChartWidget
{
    protected ?string $heading = 'Total de Materiales Deportivos';

    protected function getData(): array
    {

        $datos = MaterialDeportivo::query()
            ->selectRaw('categoria, SUM(cantidad_inventario) as total')
            ->groupBy('categoria')
            ->pluck('total', 'categoria');

        return [
            'datasets' => [
                [
                    'label' => 'Cantidad de Materiales',
                    'data' => $datos->values()->toArray(),
                    'backgroundColor' => [
                        '#FF007F', '#7E22CE', '#FF00FF', '#00DFD8',
                    ],
                ],
            ],
            'labels' => $datos->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
