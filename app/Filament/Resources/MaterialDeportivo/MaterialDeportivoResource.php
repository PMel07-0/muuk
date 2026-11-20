<?php

namespace App\Filament\Resources\MaterialDeportivo;

use App\Filament\Resources\MaterialDeportivo\Pages\CreateMaterialDeportivo;
use App\Filament\Resources\MaterialDeportivo\Pages\EditMaterialDeportivo;
use App\Filament\Resources\MaterialDeportivo\Pages\ListMaterialDeportivo;
use App\Filament\Resources\MaterialDeportivo\Schemas\MaterialDeportivoForm;
use App\Filament\Resources\MaterialDeportivo\Tables\MaterialDeportivoTable;
use App\Models\MaterialDeportivo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MaterialDeportivoResource extends Resource
{
    protected static ?string $model = MaterialDeportivo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return MaterialDeportivoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MaterialDeportivoTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMaterialDeportivo::route('/'),
            'create' => CreateMaterialDeportivo::route('/create'),
            'edit' => EditMaterialDeportivo::route('/{record}/edit'),
        ];
    }
}
