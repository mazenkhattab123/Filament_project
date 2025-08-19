<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EmployeeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('country_id')
                    ->numeric(),
                TextEntry::make('state_id')
                    ->numeric(),
                TextEntry::make('city_id')
                    ->numeric(),
                TextEntry::make('department_id')
                    ->numeric(),
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('middle_name'),
                TextEntry::make('address'),
                TextEntry::make('zip_code'),
                TextEntry::make('birth_date')
                    ->date(),
                TextEntry::make('hired_date')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
