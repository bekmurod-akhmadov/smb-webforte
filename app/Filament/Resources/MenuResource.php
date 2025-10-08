<?php

namespace App\Filament\Resources;

use AbdulmajeedJamaan\FilamentTranslatableTabs\TranslatableTabs;
use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'resources';

    protected static ?int $navigationSort = 1;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.menu_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.menu_plural');
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::$model::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\Section::make()
                            ->columnSpan(1)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label(__('app.label.title'))
                                    ->required()
                                    ->helperText(__('app.helper.menu_title')),

                                Forms\Components\TextInput::make('url')
                                    ->label(__('app.label.url'))
                                    ->required(),

                                Forms\Components\Select::make('target')
                                    ->label(__('app.label.target'))
                                    ->options(Menu::targetOptions())
                                    ->default(Menu::TARGET_SELF)
                                    ->required(),
                            ]),

                        Forms\Components\Section::make()
                            ->columnSpan(1)
                            ->schema([
                                Forms\Components\Select::make('position')
                                    ->label(__('app.label.position'))
                                    ->options(Menu::positionOptions())
                                    ->default(Menu::POSITION_HEADER)
                                    ->required()
                                    ->reactive(),

                                Forms\Components\Select::make('group')
                                    ->label(__('app.label.group'))
                                    ->options(Menu::groupOptions())
                                    ->nullable()
                                    ->helperText(__('app.helper.menu_group'))
                                    ->visible(fn (Get $get) => $get('position') == Menu::POSITION_FOOTER)
                                    ->required(fn (Get $get) => $get('position') == Menu::POSITION_FOOTER)
                                    ->dehydrated(fn (Get $get) => $get('position') == Menu::POSITION_FOOTER),

                                Forms\Components\Select::make('parent_id')
                                    ->label(__('app.label.parent'))
                                    ->options(Menu::query()->pluck('title', 'id'))
                                    ->searchable()
                                    ->nullable(),

                                Forms\Components\TextInput::make('sort')
                                    ->label(__('app.label.sort'))
                                    ->numeric()
                                    ->default(0),

                                Forms\Components\Toggle::make('status')
                                    ->label(__('app.label.status'))
                                    ->default(true),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('updated_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label(__('app.label.title'))
                    ->sortable()
                    ->wrap()
                    ->searchable(),

                Tables\Columns\TextColumn::make('url')
                    ->label(__('app.label.url'))
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('position')
                    ->label(__('app.label.position'))
                    ->formatStateUsing(fn ($state) => Menu::positionOptions()[$state] ?? '')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        Menu::POSITION_HEADER => 'primary',
                        Menu::POSITION_FOOTER => 'success',
                        default => 'default',
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('group')
                    ->label(__('app.label.group'))
                    ->formatStateUsing(fn ($state) => Menu::groupOptions()[$state] ?? '')
                    ->badge()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('sort')
                    ->label(__('app.label.sort'))
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\ToggleColumn::make('status')
                    ->label(__('app.label.status'))
                    ->sortable()
                    ->onIcon('heroicon-m-check-circle')
                    ->offIcon('heroicon-m-x-circle')
                    ->onColor('success')
                    ->offColor('danger'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('app.label.created'))
                    ->dateTime('d.m.Y H:i')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('app.label.updated'))
                    ->dateTime('d.m.Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('position')
                    ->label(__('app.label.position'))
                    ->options(Menu::positionOptions()),

                SelectFilter::make('status')
                    ->label(__('app.label.status'))
                    ->options(Menu::statusOptions()),

                SelectFilter::make('group')
                    ->label(__('app.label.group'))
                    ->options(Menu::groupOptions()),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'view' => Pages\ViewMenu::route('/{record}'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
