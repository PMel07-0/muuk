<?php

namespace App\Filament\Resources\DetallePrestamos\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class DetallePrestamoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Select::make('material_idMaterial')
                    ->label('Material')
                    ->relationship('material', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('prestamo_idPrestamo')
                    ->label('Cliente')
                    ->relationship('prestamo.cliente', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('cantidad')
                    ->label('Cantidad')
                    ->numeric()
                    ->minValue(1)
                    ->required(),

                Select::make('estado')
                    ->label('Estado')
                    ->options([
                        'Prestado' => 'Prestado',
                        'Devuelto' => 'Devuelto',
                    ])
                    ->default('Prestado')
                    ->required(),

                Select::make('estado_fisico_devuelto')
                    ->label('Estado físico al devolver')
                    ->options([
                        'Bueno' => 'Bueno',
                        'Regular' => 'Regular',
                        'Dañado' => 'Dañado',
                    ])
                    ->placeholder('Selecciona una opción'),

                DatePicker::make('fechaDevolucion')
                    ->label('Fecha de devolución'),
            ]);
    }
}
