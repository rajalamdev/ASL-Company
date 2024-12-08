<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class Index extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('index')
            ->schema([
                Repeater::make(name: 'carousel')
                ->schema([
                    TextInput::make(name: 'title'),
                    TextInput::make(name: 'desc')
                ]),
                CuratorPicker::make('company_logo')
                ->label('Company Logo')
                ->buttonLabel('Upload Company Logo')
                ->color('primary|secondary|success|danger') // defaults to primary
                ->outlined(true|false) // defaults to true
                ->size('sm|md|lg') // defaults to md
                ->constrained(true|false) // defaults to false (forces image to fit inside the preview area)
                ->lazyLoad(true) // defaults to true
                ->listDisplay( true) // defaults to true
                ->tenantAware(true) // defaults to true
                ->defaultPanelSort('desc') // defaults to 'desc'
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}