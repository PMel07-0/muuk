<?php

namespace App\Filament\Resources\DetallePrestamos\Pages;

use App\Filament\Resources\DetallePrestamos\DetallePrestamoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDetallePrestamo extends CreateRecord
{
    protected static string $resource = DetallePrestamoResource::class;

    protected static ?string $title = 'Registrar un Prestamo';

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Prestamo Registrado';
    }
}
