<?php

namespace App\Filament\Resources\Membresias\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MembresiasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cliente.nombre')
                    ->label('Cliente')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tipoMembresia.nombre')
                    ->label('Tipo de membresía')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('fechaInicio')
                    ->label('Fecha de inicio')
                    ->date('d/m/Y')
                    ->sortable(),
                TextColumn::make('fechaFin')
                    ->label('Fecha de término')
                    ->date('d/m/Y')
                    ->sortable(),
                TextColumn::make('pago')
                    ->label('Pago')
                    ->money('MXN')
                    ->sortable(),
                TextColumn::make('vigencia')
                    ->label('Vigencia')
                    ->badge()
                    ->color(fn (string $state): string => $state === 'Vigente' ? 'success' : 'danger'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
