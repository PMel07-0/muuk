<?php

namespace App\Filament\Resources\MaterialDeportivos\Pages;

use App\Filament\Resources\MaterialDeportivos\MaterialDeportivoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMaterialDeportivo extends CreateRecord
{
    protected static string $resource = MaterialDeportivoResource::class;

    protected static ?string $title = 'Registrar un Material Deportivo';

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Material Deportivo registrado';
    }
}
