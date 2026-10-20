<?php

namespace App\Filament\Resources\MaterialDeportivos\Pages;

use App\Filament\Resources\MaterialDeportivos\MaterialDeportivoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialDeportivos extends ListRecords
{
    protected static string $resource = MaterialDeportivoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
