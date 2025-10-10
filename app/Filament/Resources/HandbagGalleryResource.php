<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HandbagGalleryResource\Pages;
use App\Filament\Resources\HandbagGalleryResource\RelationManagers;
use App\Models\HandbagGallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HandbagGalleryResource extends Resource
{
    protected static ?string $model = HandbagGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'resources';

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.handbag_gallery_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.handbag_gallery_plural');
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
                                Forms\Components\TextInput::make('username')
                                    ->label(__('app.label.username'))
                                    ->required(),

                                Forms\Components\TextInput::make('text')
                                    ->label(__('app.label.text'))
                                    ->visible(fn (Forms\Get $get) => $get('style') == HandbagGallery::STYLE_ALT2)
                                    ->required(fn (Forms\Get $get) => $get('style') == HandbagGallery::STYLE_ALT2)
                                    ->reactive(),

                                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                                    ->collection('image')
                                    ->label(__('app.label.image'))
                                    ->image()
                                    ->downloadable()
                                    ->openable()
                                    ->imageEditor()
                                    ->imageEditorMode(3)
                                    ->optimize('png')
                                    ->acceptedFileTypes(['image/png']),
                            ]),

                        Forms\Components\Section::make()
                            ->columnSpan(1)
                            ->schema([
                                Forms\Components\Select::make('style')
                                    ->label(__('app.label.style'))
                                    ->options(HandbagGallery::styleOptions())
                                    ->default(HandbagGallery::STYLE_DEFAULT)
                                    ->required()
                                    ->reactive(),

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
                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('image')
                    ->label(__('app.label.image'))
                    ->square()
                    ->height(75),

                Tables\Columns\TextColumn::make('username')
                    ->label(__('app.label.username'))
                    ->sortable()
                    ->searchable(),

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
                SelectFilter::make('status')
                    ->label(__('app.label.status'))
                    ->options(HandbagGallery::statusOptions()),
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
            'index' => Pages\ListHandbagGalleries::route('/'),
            'create' => Pages\CreateHandbagGallery::route('/create'),
            'view' => Pages\ViewHandbagGallery::route('/{record}'),
            'edit' => Pages\EditHandbagGallery::route('/{record}/edit'),
        ];
    }
}
