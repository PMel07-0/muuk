<?php

namespace App\Filament\Resources\Membresias\Pages;

use App\Filament\Resources\Membresias\MembresiaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMembresia extends EditRecord
{
    protected static string $resource = MembresiaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Membresía actualizada exitosamente';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->hidden(fn ($record) => $record->vigencia_calculada === 'Vigente')

        ];
    }
}
