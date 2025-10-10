<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroGalleryResource\Pages;
use App\Filament\Resources\HeroGalleryResource\RelationManagers;
use App\Models\HeroGallery;
use Filament\Forms;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
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
        return __('app.label.hero_gallery_single_plural');
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

                                Forms\Components\FileUpload::make('desktop_file')
                                    ->label(__('app.label.desktop_image'))
                                    ->directory('uploads/hero-gallery/')
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->required(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->image()
                                    ->openable()
                                    ->visibility('public')
                                    ->downloadable()
                                    ->imageEditor()
                                    ->imageEditorMode(3),

                                Forms\Components\FileUpload::make('desktop_file')
                                    ->label(__('app.label.desktop_video'))
                                    ->directory('uploads/hero-gallery/')
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'video')
                                    ->required(fn (Forms\Get $get) => $get('type') === 'video')
                                    ->acceptedFileTypes(['video/mp4', 'video/webm'])
                                    ->openable()
                                    ->downloadable()
                                    ->visibility('public')
                                    ->maxSize(51200),

                                Forms\Components\FileUpload::make('mobile_file')
                                    ->label(__('app.label.mobile_image'))
                                    ->directory('uploads/hero-gallery/')
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->required(fn (Forms\Get $get) => $get('type') === 'image')
                                    ->image()
                                    ->imageEditor()
                                    ->downloadable()
                                    ->openable()
                                    ->visibility('public')
                                    ->imageEditorMode(3),

                                Forms\Components\FileUpload::make('mobile_file')
                                    ->label(__('app.label.mobile_video'))
                                    ->directory('uploads/hero-gallery/')
                                    ->visible(fn (Forms\Get $get) => $get('type') === 'video')
                                    ->acceptedFileTypes(['video/mp4', 'video/webm'])
                                    ->openable()
                                    ->downloadable()
                                    ->visibility('public')
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
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
