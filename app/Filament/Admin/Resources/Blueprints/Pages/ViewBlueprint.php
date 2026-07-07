<?php

namespace App\Filament\Admin\Resources\Blueprints\Pages;

use App\Filament\Admin\Resources\Blueprints\BlueprintResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBlueprint extends ViewRecord
{
    protected static string $resource = BlueprintResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
