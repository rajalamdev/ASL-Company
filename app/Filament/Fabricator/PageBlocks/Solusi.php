<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class Solusi extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('solusi')
            ->schema([
                TextInput::make('title'),
                TextInput::make('desc'),
                Repeater::make(name: 'card')
                ->schema([
                    TextInput::make('title'),
                    TextInput::make('desc'),
                    CuratorPicker::make('image')
                    ->label('Card Image')
                    ->buttonLabel('Upload Card Image')
                    ->color('primary|secondary|success|danger') // defaults to primary
                    ->outlined(true|false) // defaults to true
                    ->size('sm|md|lg') // defaults to md
                    ->constrained(true|false) // defaults to false (forces image to fit inside the preview area)
                    ->lazyLoad(true) // defaults to true
                    ->listDisplay( true) // defaults to true
                    ->tenantAware(true) // defaults to true
                    ->defaultPanelSort('desc') // defaults to 'desc'
                ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}