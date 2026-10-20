<?php

namespace App\Filament\Resources\DetallePrestamos\Pages;

use App\Filament\Resources\DetallePrestamos\DetallePrestamoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDetallePrestamo extends EditRecord
{
    protected static string $resource = DetallePrestamoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
