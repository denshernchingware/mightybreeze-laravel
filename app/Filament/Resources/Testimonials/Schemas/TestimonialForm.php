<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->minLength(2)
                    ->placeholder(' max of about 3-4 words')
                    ->maxLength(45),


                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->minLength(30)
                    ->placeholder('min of about 3-4 words and max of about 30 words')
                    ->maxLength(200),

                TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->tel()
                    ->maxLength(20)
                    ->nullable(),



            ]);
    }
}
