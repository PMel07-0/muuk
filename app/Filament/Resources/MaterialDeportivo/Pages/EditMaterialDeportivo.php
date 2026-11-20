<?php

namespace App\Filament\Resources\MaterialDeportivo\Pages;

use App\Filament\Resources\MaterialDeportivo\MaterialDeportivoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMaterialDeportivo extends EditRecord
{
    protected static string $resource = MaterialDeportivoResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Material Deportivo actualizado exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->hidden(fn ($record) => $record->detallesPrestamo()->exists())

        ];
    }
}
