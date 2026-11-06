<?php

namespace App\Filament\Resources\Prestamos\Pages;

use App\Filament\Resources\Prestamos\PrestamoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrestamo extends EditRecord
{
    protected static string $resource = PrestamoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Préstamo actualizado exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->hidden(fn ($record) => $record->prestamos()->withTrashed()->exists())

        ];
    }
}
