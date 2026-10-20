<?php

namespace App\Filament\Resources\TipoMembresias\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TipoMembresiaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->placeholder('Ej. Mensual')
                    ->helperText('Nombre del tipo de membresía.')
                    ->required()
                    ->maxLength(255),

                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->placeholder('Ej. Acceso ilimitado al gimnasio por un mes.')
                    ->helperText('Detalle de lo que incluye esta membresía.')
                    ->columnSpanFull()
                    ->rows(3),

                TextInput::make('costo')
                    ->label('Costo')
                    ->placeholder('Ej. 350')
                    ->helperText('Precio de la membresía.')
                    ->numeric()
                    ->minValue(0)
                    ->prefix('$')
                    ->required(),

                TextInput::make('duracion_dias')
                    ->label('Duración (días)')
                    ->placeholder('Ej. 30')
                    ->helperText('Número de días que dura la membresía.')
                    ->numeric()
                    ->minValue(1)
                    ->required(),

                Select::make('estatus')
                    ->label('Estatus')
                    ->options([
                        'Activo' => 'Activo',
                        'Inactivo' => 'Inactivo',
                    ])
                    ->helperText('Estado del tipo de membresía.')
                    ->default('Activo')
                    ->required(),
            ]);
    }
}
