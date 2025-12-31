<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;


class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
              ->defaultSort('created_at', 'desc') 
            ->columns([
            ImageColumn::make('image')
                ->label('Photo')
                ->disk('uploads')
                ->width(60),

            TextColumn::make('title')
                ->label('Title')
                ->searchable()
                ->sortable(),

            TextColumn::make('category')
                ->label('Category')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'borehole' => 'primary',
                    'solar' => 'success',
                    'bushPump' => 'warning',
                    'irrigation' => 'warning',
                    default => 'gray',
                }),

            TextColumn::make('description')
                ->label('Description')
                ->limit(50),

            TextColumn::make('information')
                ->label('Info')
                ->limit(50)
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}