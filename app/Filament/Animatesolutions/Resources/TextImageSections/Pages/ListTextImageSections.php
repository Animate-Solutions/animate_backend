<?php

namespace App\Filament\Animatesolutions\Resources\TextImageSections\Pages;

use App\Filament\Animatesolutions\Resources\TextImageSections\TextImageSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTextImageSections extends ListRecords
{
    protected static string $resource = TextImageSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
