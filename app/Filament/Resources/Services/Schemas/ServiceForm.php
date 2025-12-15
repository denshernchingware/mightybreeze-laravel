<?php

namespace App\Filament\Resources\Services\Schemas;



use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

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
                        'borehole' => 'Borehole',
                        'solar' => 'Solar Installation',
                        'bushPump' => 'Bush Pump',
                        'irrigation' => 'Irrigation',
                    ]),
                   // ->required(),

                Textarea::make('information')
                    ->label('Additional Information')
                    ->required(),

                FileUpload::make('image')
                    ->label('Service Photo')
                    ->image()
                    ->downloadable()
                    ->disk('uploads')
                    ->directory('/')
                    //->required()
                    ->helperText('600 x 710 recommended'),
            ]);
    }
}
