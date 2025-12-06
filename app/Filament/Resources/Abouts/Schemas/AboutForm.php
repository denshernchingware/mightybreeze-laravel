<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use App\Models\About;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Textarea::make('history')
                ->label('History')
                ->rows(5)
                ->required(),

             Textarea::make('mission')
                ->label('Mission')
                ->rows(5)
                ->required(),

             Textarea::make('vision')
                ->label('Vision')
                ->rows(5)
                ->required(),

             Textarea::make('values')
                ->label('Values')
                ->rows(5)
                ->required(),
            ]);
    }
}
