<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;
class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                TextInput::make(name: 'tagline'),
                TextInput::make(name: 'title'),
                TextInput::make(name: 'desc'),
                TextInput::make(name: 'button_text'),
                CuratorPicker::make('image')
                    ->label('Hero Image')
                    ->buttonLabel('Upload Image')
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