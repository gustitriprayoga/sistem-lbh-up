<?php

namespace App\Filament\Resources\Publikasis;

use App\Filament\Resources\Publikasis\Pages\CreatePublikasi;
use App\Filament\Resources\Publikasis\Pages\EditPublikasi;
use App\Filament\Resources\Publikasis\Pages\ListPublikasis;
use App\Filament\Resources\Publikasis\Schemas\PublikasiForm;
use App\Filament\Resources\Publikasis\Tables\PublikasisTable;
use App\Models\Publikasi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PublikasiResource extends Resource
{
    protected static ?string $model = Publikasi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PublikasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PublikasisTable::configure($table);
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
            'index' => ListPublikasis::route('/'),
            'create' => CreatePublikasi::route('/create'),
            'edit' => EditPublikasi::route('/{record}/edit'),
        ];
    }
}
