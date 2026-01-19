<?php

namespace App\Filament\Resources\Publikasis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PublikasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                TextInput::make('penulis')
                    ->required(),
                TextInput::make('nama_jurnal'),
                Select::make('jenis')
                    ->options([
            'jurnal_nasional' => 'Jurnal nasional',
            'jurnal_internasional' => 'Jurnal internasional',
            'buku' => 'Buku',
            'prosiding' => 'Prosiding',
        ])
                    ->required(),
                TextInput::make('tahun')
                    ->required(),
                TextInput::make('link_url')
                    ->url(),
                TextInput::make('file_pdf'),
            ]);
    }
}
