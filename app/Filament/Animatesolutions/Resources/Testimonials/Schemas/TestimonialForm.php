<?php

namespace App\Filament\Animatesolutions\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('role')
                    ->required()
                    ->maxLength(255),
                Textarea::make('comment')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->required(),
                Toggle::make('is_active')
                    ->default(true),
                FileUpload::make('image')
                    ->image()
                    ->directory('testimonials')
                    ->imageEditor()
                    ->nullable(),
            ]);
    }
}