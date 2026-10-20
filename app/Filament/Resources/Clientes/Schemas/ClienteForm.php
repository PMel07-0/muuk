<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->placeholder('Ej. Miriam')
                    ->helperText('Nombre del cliente.')
                    ->required()
                    ->maxLength(255),

                TextInput::make('apellido_paterno')
                    ->label('Apellido paterno')
                    ->placeholder('Ej. Lozano')
                    ->helperText('Primer apellido del cliente.')
                    ->required()
                    ->maxLength(255),

                TextInput::make('apellido_materno')
                    ->label('Apellido materno')
                    ->placeholder('Ej. Matus')
                    ->helperText('Segundo apellido del cliente.')
                    ->maxLength(255),

                DatePicker::make('fecha_nacimiento')
                    ->label('Fecha de nacimiento')
                    ->helperText('Formato: día/mes/año.')
                    ->required(),

                TextInput::make('correo')
                    ->label('Correo electrónico')
                    ->placeholder('Ej. cliente@correo.com')
                    ->helperText('Correo único del cliente.')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                Select::make('estatus')
                    ->label('Estatus')
                    ->options([
                        'Activo' => 'Activo',
                        'Inactivo' => 'Inactivo',
                    ])
                    ->helperText('Estado actual del cliente.')
                    ->default('Activo')
                    ->required(),
            ]);
    }
}
