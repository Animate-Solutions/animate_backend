<?php

namespace App\Filament\Animatesolutions\Resources\TextImageSections;

use App\Filament\Animatesolutions\Resources\TextImageSections\Pages\CreateTextImageSection;
use App\Filament\Animatesolutions\Resources\TextImageSections\Pages\EditTextImageSection;
use App\Filament\Animatesolutions\Resources\TextImageSections\Pages\ListTextImageSections;
use App\Filament\Animatesolutions\Resources\TextImageSections\Schemas\TextImageSectionForm;
use App\Filament\Animatesolutions\Resources\TextImageSections\Tables\TextImageSectionsTable;
use App\Models\TextImageSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TextImageSectionResource extends Resource
{
    protected static ?string $model = TextImageSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'header';

    public static function form(Schema $schema): Schema
    {
        return TextImageSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TextImageSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTextImageSections::route('/'),
            'create' => CreateTextImageSection::route('/create'),
            'edit' => EditTextImageSection::route('/{record}/edit'),
        ];
    }
}
