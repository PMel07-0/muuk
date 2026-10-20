<?php

namespace App\Filament\Resources\MaterialDeportivos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MaterialDeportivoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->placeholder('Ej. Balón de fútbol')
                    ->helperText('Nombre del material deportivo.')
                    ->required()
                    ->maxLength(255),

                TextInput::make('categoria')
                    ->label('Categoría')
                    ->placeholder('Ej. Balones, Pesas, Yoga')
                    ->helperText('Grupo al que pertenece el material.')
                    ->required()
                    ->maxLength(255),

                Select::make('estado_fisico')
                    ->label('Estado físico')
                    ->options([
                        'Nuevo' => 'Nuevo',
                        'Bueno' => 'Bueno',
                        'Regular' => 'Regular',
                        'Dañado' => 'Dañado',
                    ])
                    ->helperText('Condición actual del material.')
                    ->default('Bueno')
                    ->required(),

                TextInput::make('cantidad_inventario')
                    ->label('Cantidad en inventario')
                    ->placeholder('Ej. 10')
                    ->helperText('Total de unidades registradas.')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                TextInput::make('cantidad_disponible')
                    ->label('Cantidad disponible')
                    ->placeholder('Ej. 8')
                    ->helperText('Unidades disponibles para préstamo.')
                    ->numeric()
                    ->minValue(0)
                    ->required(),

                Select::make('estatus')
                    ->label('Estatus')
                    ->options([
                        'Disponible' => 'Disponible',
                        'Agotado' => 'Agotado',
                        'Inactivo' => 'Inactivo',
                    ])
                    ->helperText('Estado actual del material.')
                    ->default('Disponible')
                    ->required(),
            ]);
    }
}
