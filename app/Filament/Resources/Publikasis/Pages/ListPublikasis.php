<?php

namespace App\Filament\Resources\Publikasis\Pages;

use App\Filament\Resources\Publikasis\PublikasiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPublikasis extends ListRecords
{
    protected static string $resource = PublikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
