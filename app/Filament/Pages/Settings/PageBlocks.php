<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class PageBlocks extends BaseSettings
{
    protected static ?string $navigationIcon = 'heroicon-o-view-columns';
    protected static ?int $navigationSort = 2;

    public static function getNavigationLabel(): string
    {
        return __('app.label.page_blocks');
    }

    public function getTitle(): string
    {
        return __('app.label.page_blocks');
    }

    protected static ?string $navigationGroup = 'settings';

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.settings');
    }

    public function schema(): array|Closure
    {
        return [
            Forms\Components\Tabs::make(__('app.label.page_blocks'))
                ->schema([

                    /** Общие элементы */
                    Forms\Components\Tabs\Tab::make(__('app.label.common_elements'))
                        ->schema([
                            Forms\Components\Toggle::make('blocks.marquee')
                                ->label(__('app.label.block_marquee'))
                                ->default(true),
                        ]),

                    /** Главная */
                    Forms\Components\Tabs\Tab::make(__('app.label.page_home'))
                        ->schema([

                            Forms\Components\Section::make(__('app.label.block_hero_settings'))
                                ->schema([
                                    Forms\Components\Toggle::make('blocks.home.hero')
                                        ->label(__('app.label.block_hero'))
                                        ->default(true),

                                    Forms\Components\Toggle::make('blocks.home.hero_autoplay')
                                        ->label(__('app.label.hero_autoplay'))
                                        ->default(true),

                                    Forms\Components\TextInput::make('blocks.home.hero_autoplay_delay')
                                        ->label(__('app.label.hero_autoplay_delay'))
                                        ->numeric()
                                        ->default(5000)
                                        ->suffix(__('app.label.millisecond'))
                                        ->helperText(__('app.label.hero_autoplay_delay_helper')),
                                ])
                                ->columns(2)
                                ->collapsible(),

                            Forms\Components\Toggle::make('blocks.home.collection')
                                ->label(__('app.label.block_collection'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.woman_man')
                                ->label(__('app.label.block_woman_man'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.mini_moss')
                                ->label(__('app.label.block_mini_moss'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.handbag_gallery')
                                ->label(__('app.label.handbag_gallery'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.deliver_1')
                                ->label(__('app.label.deliver_1'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.collection_2')
                                ->label(__('app.label.block_collection_2'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.deliver_2')
                                ->label(__('app.label.deliver_2'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.home.newsletter')
                                ->label(__('app.label.newsletter'))
                                ->default(true),
                        ]),

                    /** Каталог */
                    Forms\Components\Tabs\Tab::make(__('app.label.page_catalog'))
                        ->schema([

                            Forms\Components\Toggle::make('blocks.catalog.collection')
                                ->label(__('app.label.block_collection'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.catalog.delivery')
                                ->label(__('app.label.delivery'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.catalog.mini_moss')
                                ->label(__('app.label.block_mini_moss'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.catalog.collection_all')
                                ->label(__('app.label.collection_all'))
                                ->default(true),

                            Forms\Components\Toggle::make('blocks.catalog.newsletter')
                                ->label(__('app.label.newsletter'))
                                ->default(true),
                        ]),
                ]),
        ];
    }
}
