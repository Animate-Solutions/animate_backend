<?php

namespace App\Filament\Animatesolutions\Resources\TextImageSections\Pages;

use App\Filament\Animatesolutions\Resources\TextImageSections\TextImageSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTextImageSection extends EditRecord
{
    protected static string $resource = TextImageSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
