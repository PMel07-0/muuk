<?php

namespace App\Filament\Resources\Prestamos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PrestamoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('cliente_idCliente')
                    ->label('Cliente')
                    ->relationship('cliente', 'nombre')
                    ->searchable()
                    ->preload()
                    ->helperText('Selecciona el cliente que solicita el préstamo.')
                    ->required(),

                DatePicker::make('fechaPrestamo')
                    ->label('Fecha de préstamo')
                    ->helperText('Día en que se presta el material.')
                    ->required(),

                Select::make('estado')
                    ->label('Estado')
                    ->options([
                        'Prestado' => 'Prestado',
                        'Devuelto' => 'Devuelto',
                    ])
                    ->helperText('Situación actual del préstamo.')
                    ->default('Prestado')
                    ->required(),
            ]);
    }
}
