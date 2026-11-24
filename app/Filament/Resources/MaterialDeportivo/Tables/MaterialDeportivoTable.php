<?php

namespace App\Filament\Resources\MaterialDeportivo\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MaterialDeportivoTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->searchable(),
                TextColumn::make('categoria')
                    ->searchable(),
                TextColumn::make('estado_fisico')
                    ->searchable(),
                TextColumn::make('cantidad_inventario')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('cantidad_disponible')
                    ->label('Cantidad disponible')
                    ->state(fn ($record): int => (int) $record->cantidad_disponible)
                    ->numeric()
                    ->sortable(query: function ($query, string $direction) {
                        return $query->orderBy('cantidad_inventario', $direction);
                    }),
                TextColumn::make('estatus')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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