<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use App\Models\Project;
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
                        'news' => 'News',
                        'events' => 'Events',
                        'general' => 'General',
                    ])
                    ->required(),



                FileUpload::make('image')
                    ->label('Service Photo')
                    ->image()
                    ->downloadable()
                    ->disk('public')
                    ->directory('services')
                    ->required()
                    ->helperText('600 x  600 commended'),
            ]);
    }
}
