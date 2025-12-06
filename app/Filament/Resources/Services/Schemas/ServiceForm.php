<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use App\Models\Service;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required(),

                Select::make('category')
                    ->label('Category')
                    ->options([
                        'news' => 'News',
                        'events' => 'Events',
                        'general' => 'General',
                    ])
                    ->required(),

                Textarea::make('information')
                    ->label('Additional Information')
                    ->required(),

                FileUpload::make('image')
                    ->label('Service Photo')
                    ->image()
                    ->downloadable()
                    ->disk('public')
                    ->directory('services')
                    ->required()
                    ->helperText('600 x 710 recommended'),
            ]);
    }
}
