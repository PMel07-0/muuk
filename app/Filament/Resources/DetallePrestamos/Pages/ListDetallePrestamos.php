<?php

namespace App\Filament\Resources\DetallePrestamos\Pages;

use App\Filament\Resources\DetallePrestamos\DetallePrestamoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDetallePrestamos extends ListRecords
{
    protected static string $resource = DetallePrestamoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
