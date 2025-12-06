<?php

namespace App\Filament\Resources\Abouts\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\Abouts\AboutResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAbout extends CreateRecord
{
    protected static string $resource = AboutResource::class;

protected static bool $canCreateAnother = false;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}



}
