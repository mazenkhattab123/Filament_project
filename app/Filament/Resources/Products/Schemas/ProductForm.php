<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                TextInput::make('name'),
                                TextInput::make('slug'),
                                MarkdownEditor::make('slug')->columnSpanFull(),
                            ])->columns(2),
                        Section::make('pricing $ inventory')
                            ->schema([
                                TextInput::make('sku'),
                                TextInput::make('price'),
                                TextInput::make('quantity'),
                                Select::macro()
                            ])->columns(2),
                    ]),
                Group::make()
                    ->schema([
                        Section::make()
                            ->schema([
                                Toggle::make('is_visible'),
                                Toggle::make('is_featured'),
                                DatePicker::make('published_at'),
                            ]),
                    ])
            ]);
    }
}
