<?php

namespace App\Filament\Animatesolutions\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn(Set $set, ?string $state) =>
                        $set('slug', Str::slug($state))
                    ),

                TextInput::make('slug')
                    ->required(),

                Select::make('icon')
                    ->options([
                        'wrench' => 'Wrench',
                        'lifebuoy' => 'Lifebuoy',
                        'workflow' => 'Workflow',
                        'shoppingcart' => 'Shopping Cart',
                    ])
                    ->searchable()
                    ->required(),

                Textarea::make('description')
                    ->rows(5)
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('link_label'),

                TextInput::make('link_href')
                    ->url(),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
