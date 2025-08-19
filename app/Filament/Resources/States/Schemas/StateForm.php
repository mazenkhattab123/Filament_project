<?php

namespace App\Filament\Resources\States\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('country_id')
                    ->required()
                    ->preload()
                    ->searchable()
                    ->relationship('country', 'name'),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
