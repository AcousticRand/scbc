<?php

namespace App\Filament\Admin\Resources\Products\RelationManagers;

use App\Filament\Admin\Resources\Blueprints\BlueprintResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class BlueprintsRelationManager extends RelationManager
{
    protected static string $relationship = 'blueprints';

    protected static ?string $relatedResource = BlueprintResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
