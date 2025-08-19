<?php

namespace App\Filament\Resources\Cities\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('state_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
