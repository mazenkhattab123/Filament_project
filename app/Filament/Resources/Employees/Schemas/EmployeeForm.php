<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('country_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('country', 'name'),
                Select::make('state_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('state', 'name'),
                Select::make('city_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('city', 'name'),
                Select::make('department_id')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('department', 'name'),
                Section::make("User Name") // section used to group some input fields with each other
                    ->description('add the user name details')
                    ->schema([
                        TextInput::make('first_name')
                            ->required(),
                        TextInput::make('last_name')
                            ->required(),
                        TextInput::make('middle_name')
                            ->required(),
                    ])->columns(3)->columnSpanFull(),
                Section::make('User Address')
                    ->description('add the user address')
                    ->schema([
                        TextInput::make('address')
                            ->required(),
                        TextInput::make('zip_code')
                            ->required()
                    ])->columnSpanFull()->columns(2),

                Section::make('Dates')
                    ->schema([
                        DatePicker::make('birth_date')
                            ->required(),
                        DatePicker::make('hired_date')
                            ->required()
                    ])->columnSpanFull()->columns(2)
            ])->columns(3);
    }
}
