<?php

namespace App\Filament\Resources\MaterialDeportivos;

use App\Filament\Resources\MaterialDeportivos\Pages\CreateMaterialDeportivo;
use App\Filament\Resources\MaterialDeportivos\Pages\EditMaterialDeportivo;
use App\Filament\Resources\MaterialDeportivos\Pages\ListMaterialDeportivos;
use App\Filament\Resources\MaterialDeportivos\Schemas\MaterialDeportivoForm;
use App\Filament\Resources\MaterialDeportivos\Tables\MaterialDeportivosTable;
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
        return MaterialDeportivosTable::configure($table);
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
            'index' => ListMaterialDeportivos::route('/'),
            'create' => CreateMaterialDeportivo::route('/create'),
            'edit' => EditMaterialDeportivo::route('/{record}/edit'),
        ];
    }
}
