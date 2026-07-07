<?php

namespace App\Filament\Admin\Resources\Blueprints\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BlueprintForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
