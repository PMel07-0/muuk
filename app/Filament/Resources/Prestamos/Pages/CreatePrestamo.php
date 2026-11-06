<?php

namespace App\Filament\Resources\Prestamos\Pages;

use App\Filament\Resources\Prestamos\PrestamoResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePrestamo extends CreateRecord
{
    protected static string $resource = PrestamoResource::class;

    protected static ?string $title = 'Registrar un Prestamo a detalle';

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Préstamo Registrado';
    }
}
