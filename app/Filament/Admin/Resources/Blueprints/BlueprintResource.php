<?php

namespace App\Filament\Admin\Resources\Blueprints;

use App\Filament\Admin\Resources\Blueprints\Pages\CreateBlueprint;
use App\Filament\Admin\Resources\Blueprints\Pages\EditBlueprint;
use App\Filament\Admin\Resources\Blueprints\Pages\ListBlueprints;
use App\Filament\Admin\Resources\Blueprints\Pages\ViewBlueprint;
use App\Filament\Admin\Resources\Blueprints\RelationManagers\IngredientsRelationManager;
use App\Filament\Admin\Resources\Blueprints\Schemas\BlueprintForm;
use App\Filament\Admin\Resources\Blueprints\Schemas\BlueprintInfolist;
use App\Filament\Admin\Resources\Blueprints\Tables\BlueprintsTable;
use App\Models\Blueprint;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BlueprintResource extends Resource
{
    protected static ?string $model = Blueprint::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return BlueprintForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BlueprintInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlueprintsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            IngredientsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlueprints::route('/'),
            'create' => CreateBlueprint::route('/create'),
//            'view' => ViewBlueprint::route('/{record}'),
            'edit' => EditBlueprint::route('/{record}/edit'),
        ];
    }
}
