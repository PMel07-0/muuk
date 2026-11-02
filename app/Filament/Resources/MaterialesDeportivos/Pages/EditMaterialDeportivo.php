<?php

namespace App\Filament\Resources\MaterialDeportivos\Pages;

use App\Filament\Resources\MaterialDeportivos\MaterialDeportivoResource;
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
                ->hidden(fn ($record) => $record->materialesDeportivos()->withTrashed()->exists())

        ];
    }
}
