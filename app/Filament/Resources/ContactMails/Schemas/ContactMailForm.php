<?php

namespace App\Filament\Resources\ContactMails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactMailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Client Name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->label('Client Contact')
                    ->tel()
                    ->required(),
                TextInput::make('subject')
                    ->label('Subject')
                    ->required(),
                Textarea::make('comment')
                    ->label('Client Comment')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
