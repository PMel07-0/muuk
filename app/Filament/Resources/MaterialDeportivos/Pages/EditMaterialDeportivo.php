<?php

namespace App\Filament\Resources\MaterialDeportivos\Pages;

use App\Filament\Resources\MaterialDeportivos\MaterialDeportivoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMaterialDeportivo extends EditRecord
{
    protected static string $resource = MaterialDeportivoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
