<?php

namespace App\Filament\Resources\DetallePrestamos\Pages;

use App\Filament\Resources\DetallePrestamos\DetallePrestamoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDetallePrestamo extends EditRecord
{
    protected static string $resource = DetallePrestamoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Prestamo actualizado exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->hidden(fn ($record) => $record->detallePrestamos()->withTrashed()->exists())

        ];
    }
}
