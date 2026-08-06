<?php

namespace App\Filament\Animatesolutions\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('product-images')
                    ->visibility('public')
                    ->imageEditor(),
                Repeater::make('features')
                    ->label('Features')
                    ->schema([
                        TextInput::make('value')
                            ->label('Feature')
                            ->required(),
                    ])
                    ->simple(
                        TextInput::make('value')->required()
                    )
                    ->columnSpanFull(),
                TextInput::make('video')
                    ->label('YouTube URL')
                    ->url()
                    ->helperText('Paste a normal YouTube link — e.g. https://youtu.be/...'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
