<?php

namespace App\Filament\Resources\Membresias\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MembresiaForm
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
                    ->helperText('Selecciona el cliente que adquiere la membresía.')
                    ->required(),

                Select::make('tipoMembresia_idTipoMembresia')
                    ->label('Tipo de membresía')
                    ->relationship('tipoMembresia', 'nombre')
                    ->searchable()
                    ->preload()
                    ->helperText('Selecciona el tipo de membresía a contratar.')
                    ->required(),

                DatePicker::make('fechaInicio')
                    ->label('Fecha de inicio')
                    ->helperText('Día en que comienza la vigencia.')
                    ->required(),

                DatePicker::make('fechaFin')
                    ->label('Fecha de término')
                    ->helperText('Día en que vence la membresía.')
                    ->required(),

                TextInput::make('pago')
                    ->label('Pago')
                    ->placeholder('Ej. 350')
                    ->helperText('Monto pagado por la membresía.')
                    ->numeric()
                    ->minValue(0)
                    ->prefix('$')
                    ->required(),

                Select::make('vigencia')
                    ->label('Vigencia')
                    ->options([
                        'Vigente' => 'Vigente',
                        'Vencida' => 'Vencida',
                    ])
                    ->helperText('Estado de la membresía.')
                    ->default('Vigente')
                    ->required(),
            ]);
    }
}

