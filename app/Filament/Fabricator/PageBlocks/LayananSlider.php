<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;

class LayananSlider extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('layanan-slider')
            ->schema([
                Repeater::make(name: 'services_slider')
                ->schema([
                    TextInput::make('title'),
                    TextInput::make('desc')
                ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}