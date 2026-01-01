<?php

namespace App\Filament\Resources\Projects\Schemas;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ProjectForm
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
                    ])
                    ->required(),



                FileUpload::make('image')
                    ->label('Project Photo')
                    ->image()
                    ->downloadable()
                    ->disk('uploads')
                    ->directory('/')
                    ->required()
                    ->helperText('600 x  600 commended'),
            ]);
    }
}
