<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Awcodes\Curator\Components\Forms\CuratorPicker;
class Layanan extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('layanan')
            ->schema(components: [
                TextInput::make(name: 'title'),
                TextInput::make(name: 'desc'),
                CuratorPicker::make('image')
                    ->label('Background Image')
                    ->buttonLabel('Upload Background Image')
                    ->color('primary|secondary|success|danger') // defaults to primary
                    ->outlined(true|false) // defaults to true
                    ->size('sm|md|lg') // defaults to md
                    ->constrained(true|false) // defaults to false (forces image to fit inside the preview area)
                    ->lazyLoad(true) // defaults to true
                    ->listDisplay( true) // defaults to true
                    ->tenantAware(true) // defaults to true
                    ->defaultPanelSort('desc'),
                Repeater::make(name: 'layanan')
                ->schema([
                    TextInput::make('title'),
                    CuratorPicker::make('icon')
                    ->label('Icon')
                    ->buttonLabel('Upload Icon')
                    ->color('primary|secondary|success|danger') // defaults to primary
                    ->outlined(true|false) // defaults to true
                    ->size('sm|md|lg') // defaults to md
                    ->constrained(true|false) // defaults to false (forces image to fit inside the preview area)
                    ->lazyLoad(true) // defaults to true
                    ->listDisplay( true) // defaults to true
                    ->tenantAware(true) // defaults to true
                    ->defaultPanelSort('desc'),
                ])
            ]);
            
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}