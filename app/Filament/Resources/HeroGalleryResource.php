<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroGalleryResource\Pages;
use App\Filament\Resources\HeroGalleryResource\RelationManagers;
use App\Models\HeroGallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroGalleryResource extends Resource
{
    protected static ?string $model = HeroGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'resources';

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.hero_gallery_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.hero_gallery_plural');
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

                        Forms\Components\Section::make(__('app.label.files'))
                            ->schema([

                                Forms\Components\Select::make('type')
                                    ->label(__('app.label.type'))
                                    ->options(HeroGallery::typeOptions())
                                    ->default('image')
                                    ->required()
                                    ->reactive(),

                                // Desktop image
                                Forms\Components\SpatieMediaLibraryFileUpload::make('desktop')
                                    ->collection('desktop')
                                    ->label(__('app.label.desktop_image'))
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->required(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->image()
                                    ->downloadable()
                                    ->openable()
                                    ->imageEditor()
                                    ->imageEditorMode(3)
                                    ->optimize('png')
                                    ->acceptedFileTypes(['image/png']),

                                // Desktop video
                                Forms\Components\SpatieMediaLibraryFileUpload::make('desktop')
                                    ->collection('desktop')
                                    ->label(__('app.label.desktop_video'))
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'video')
                                    ->required(fn (Forms\Get $get) => $get('type') === 'video')
                                    ->acceptedFileTypes(['video/mp4', 'video/webm'])
                                    ->downloadable()
                                    ->openable()
                                    ->maxSize(51200),

                                // Mobile image
                                Forms\Components\SpatieMediaLibraryFileUpload::make('mobile')
                                    ->collection('mobile')
                                    ->label(__('app.label.mobile_image'))
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->required(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->image()
                                    ->downloadable()
                                    ->openable()
                                    ->imageEditor()
                                    ->imageEditorMode(3)
                                    ->optimize('png')
                                    ->acceptedFileTypes(['image/png']),

                                // Mobile video
                                Forms\Components\SpatieMediaLibraryFileUpload::make('mobile')
                                    ->collection('mobile')
                                    ->label(__('app.label.mobile_video'))
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'video')
                                    ->acceptedFileTypes(['video/mp4', 'video/webm'])
                                    ->downloadable()
                                    ->openable()
                                    ->maxSize(51200),
                            ]),

                        Forms\Components\Section::make(__('app.label.settings'))
                            ->schema([
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
                SpatieMediaLibraryImageColumn::make('desktop')
                ->collection('desktop')
                    ->label(__('app.label.desktop_image'))
                    ->square()
                    ->height(75),

                SpatieMediaLibraryImageColumn::make('mobile')
                ->collection('mobile')
                    ->label(__('app.label.mobile_image'))
                    ->disk('public')
                    ->square()
                    ->height(75),

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
                    ->options(HeroGallery::statusOptions()),
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
            'index' => Pages\ListHeroGalleries::route('/'),
            'create' => Pages\CreateHeroGallery::route('/create'),
            'view' => Pages\ViewHeroGallery::route('/{record}'),
            'edit' => Pages\EditHeroGallery::route('/{record}/edit'),
        ];
    }
}
