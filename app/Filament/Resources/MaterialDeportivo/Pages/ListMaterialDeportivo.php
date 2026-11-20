<?php

namespace App\Filament\Resources\MaterialDeportivo\Pages;

use App\Filament\Resources\MaterialDeportivo\MaterialDeportivoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialDeportivo extends ListRecords
{
    protected static string $resource = MaterialDeportivoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
