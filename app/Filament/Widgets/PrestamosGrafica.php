<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Cliente;
use App\Models\DetallePrestamo;
use App\Models\MaterialDeportivo;
use App\Models\Membresia;
use App\Models\Prestamo;
use App\Models\TipoMembresia;


class PrestamosGrafica extends ChartWidget
{
    protected ?string $heading = 'Estados de los préstamos';

    protected function getData(): array
    {

        $prestados = DetallePrestamo::where('estado', 'Prestado')->count();
        $devueltos = DetallePrestamo::where('estado', 'Devuelto')->count();

        return [
            'datasets' => [
                [
            'label' => 'Cantidad de Materiales',
                    'data' => [$prestados, $devueltos],
                    'backgroundColor' => ['#E879F9', '#C084FC'],
                ],
            ],
            'labels' => ['Prestado', 'Devuelto'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
