<?php

namespace App\Filament\Resources\DetallePrestamos;

use App\Filament\Resources\DetallePrestamos\Pages\CreateDetallePrestamo;
use App\Filament\Resources\DetallePrestamos\Pages\EditDetallePrestamo;
use App\Filament\Resources\DetallePrestamos\Pages\ListDetallePrestamos;
use App\Filament\Resources\DetallePrestamos\Schemas\DetallePrestamoForm;
use App\Filament\Resources\DetallePrestamos\Tables\DetallePrestamosTable;
use App\Models\DetallePrestamo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DetallePrestamoResource extends Resource
{
    protected static ?string $model = DetallePrestamo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'DetallePrestamo';

    public static function form(Schema $schema): Schema
    {
        return DetallePrestamoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DetallePrestamosTable::configure($table);
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
            'index' => ListDetallePrestamos::route('/'),
            'create' => CreateDetallePrestamo::route('/create'),
            'edit' => EditDetallePrestamo::route('/{record}/edit'),
        ];
    }
}
