<?php

namespace App\Filament\Resources\Artikels\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Select::make('kategori_id')
                    ->relationship('kategori', 'id')
                    ->required(),
                TextInput::make('judul')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('gambar_sampul'),
                Textarea::make('ringkasan')
                    ->columnSpanFull(),
                Textarea::make('isi')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['draf' => 'Draf', 'terbit' => 'Terbit', 'arsip' => 'Arsip'])
                    ->default('draf')
                    ->required(),
                DatePicker::make('tanggal_terbit'),
            ]);
    }
}
