<?php

namespace App\Filament\Resources\Mitras\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MitraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_instansi')
                    ->required(),
                TextInput::make('logo'),
                Select::make('jenis')
                    ->options(['pemerintah' => 'Pemerintah', 'swasta' => 'Swasta', 'kampus' => 'Kampus', 'ngo' => 'Ngo'])
                    ->required(),
                TextInput::make('website')
                    ->url(),
                Toggle::make('aktif')
                    ->required(),
            ]);
    }
}
