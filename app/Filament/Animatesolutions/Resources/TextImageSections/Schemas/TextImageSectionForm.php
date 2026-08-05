<?php

namespace App\Filament\Animatesolutions\Resources\TextImageSections\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class TextImageSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('header')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(function (Set $set, ?string $state) {
                    $set('slug', Str::slug($state));
                })
                ->maxLength(255),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Forms\Components\TextInput::make('text')
                ->required()
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->disk('public')
                ->directory('text-image-sections')
                ->visibility('public')
                ->imageEditor()
                ->required()
                ->automaticallyResizeImagesMode('cover')
                ->automaticallyResizeImagesToWidth('1200')
                ->automaticallyResizeImagesToHeight('800'),

            Forms\Components\Select::make('image_position')
                ->options([
                    'left' => 'Left',
                    'right' => 'Right',
                ])
                ->required(),

            Forms\Components\TextInput::make('sort_order')
                ->numeric()
                ->default(0),

            Forms\Components\Toggle::make('is_active')
                ->default(true),
        ]);
    }
}
