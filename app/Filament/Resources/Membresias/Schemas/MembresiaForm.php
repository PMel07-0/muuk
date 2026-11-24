<?php

namespace App\Filament\Resources\Membresias\Schemas;

use App\Models\TipoMembresia;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Carbon;

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
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        self::actualizarDatosMembresia($set, $state, $get('fechaInicio'));
                    })
                    ->required(),

                DatePicker::make('fechaInicio')
                    ->label('Fecha de inicio')
                    ->helperText('Por defecto toma el día actual.')
                    ->default(fn () => Carbon::today())
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        self::actualizarDatosMembresia($set, $get('tipoMembresia_idTipoMembresia'), $state);
                    })
                    ->required(),

                DatePicker::make('fechaFin')
                    ->label('Fecha de término')
                    ->helperText('Se calcula automáticamente según el tipo de membresía.')
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                TextInput::make('pago')
                    ->label('Pago')
                    ->placeholder('Ej. 350')
                    ->helperText('Monto correspondiente al tipo de membresía.')
                    ->numeric()
                    ->minValue(0)
                    ->prefix('$')
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                TextInput::make('vigencia_calculada')
                    ->label('Vigencia')
                    ->helperText('Se determina automáticamente según la fecha actual y de término.')
                    ->formatStateUsing(fn ($record): string => $record?->vigencia_calculada ?? 'Vigente')
                    ->disabled()
                    ->dehydrated(false),
            ]);
    }

    protected static function actualizarDatosMembresia(
        callable $set,
        mixed $tipoMembresiaId,
        mixed $fechaInicio
    ): void {
        if (blank($tipoMembresiaId)) {
            $set('pago', null);
            $set('fechaFin', null);
            $set('vigencia_calculada', 'Vigente');
            return;
        }

        $tipo = TipoMembresia::find($tipoMembresiaId);

        if (! $tipo) {
            return;
        }

        $set('pago', $tipo->costo);

        if (filled($fechaInicio)) {
            $inicio = Carbon::parse($fechaInicio)->startOfDay();
            $fin = $inicio->copy()->addDays((int) $tipo->duracion_dias)->startOfDay();

            $set('fechaFin', $fin->toDateString());
            $set('vigencia_calculada', Carbon::today()->lte($fin) ? 'Vigente' : 'Vencida');
        }
    }
}