<?php

namespace App\Filament\Admin\Resources\Producers;

use App\Filament\Admin\Resources\Producers\Pages\CreateProducer;
use App\Filament\Admin\Resources\Producers\Pages\EditProducer;
use App\Filament\Admin\Resources\Producers\Pages\ListProducers;
use App\Filament\Admin\Resources\Producers\Pages\ViewProducer;
use App\Filament\Admin\Resources\Producers\Schemas\ProducerForm;
use App\Filament\Admin\Resources\Producers\Schemas\ProducerInfolist;
use App\Filament\Admin\Resources\Producers\Tables\ProducersTable;
use App\Models\Producer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProducerResource extends Resource
{
    protected static ?string $model = Producer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProducerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProducerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProducersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProducers::route('/'),
            'create' => CreateProducer::route('/create'),
            'view' => ViewProducer::route('/{record}'),
            'edit' => EditProducer::route('/{record}/edit'),
        ];
    }
}
