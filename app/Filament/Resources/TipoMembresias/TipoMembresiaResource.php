<?php

namespace App\Filament\Resources\TipoMembresias;

use App\Filament\Resources\TipoMembresias\Pages\CreateTipoMembresia;
use App\Filament\Resources\TipoMembresias\Pages\EditTipoMembresia;
use App\Filament\Resources\TipoMembresias\Pages\ListTipoMembresias;
use App\Filament\Resources\TipoMembresias\Schemas\TipoMembresiaForm;
use App\Filament\Resources\TipoMembresias\Tables\TipoMembresiasTable;
use App\Models\TipoMembresia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TipoMembresiaResource extends Resource
{
    protected static ?string $model = TipoMembresia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return TipoMembresiaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TipoMembresiasTable::configure($table);
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
            'index' => ListTipoMembresias::route('/'),
            'create' => CreateTipoMembresia::route('/create'),
            'edit' => EditTipoMembresia::route('/{record}/edit'),
        ];
    }
}
