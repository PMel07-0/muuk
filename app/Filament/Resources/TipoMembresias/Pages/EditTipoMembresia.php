<?php

namespace App\Filament\Resources\TipoMembresias\Pages;

use App\Filament\Resources\TipoMembresias\TipoMembresiaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTipoMembresia extends EditRecord
{
    protected static string $resource = TipoMembresiaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Tipo de Membresía actualizado exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->hidden(fn ($record) => $record->tipoMembresia()->withTrashed()->exists())

        ];
    }
}
