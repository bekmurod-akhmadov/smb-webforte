<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroGalleryResource\Pages;
use App\Filament\Resources\HeroGalleryResource\RelationManagers;
use App\Models\HeroGallery;
use Filament\Forms;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Form;
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
                                    ->label(__('app.hero.type'))
                                    ->options([
                                        'image' => __('app.hero.type_image'),
                                        'video' => __('app.hero.type_video'),
                                    ])
                                    ->default('image')
                                    ->required()
                                    ->reactive(),

                                // Desktop
                                Forms\Components\FileUpload::make('desktop_file')
                                    ->label(__('app.hero.device_desktop'))
                                    ->directory('hero-gallery/desktop')
                                    ->required()
                                    ->imageEditor()
                                    ->imageEditorMode(3)
                                    ->acceptedFileTypes(fn ($get) =>
                                    $get('type') === 'image'
                                        ? ['image/png', 'image/jpeg', 'image/webp']
                                        : ['video/mp4', 'video/webm']
                                    )
                                    ->maxSize(fn ($get) =>
                                    $get('type') === 'image' ? 5120 : 20480 // 5MB / 20MB
                                    )
                                    ->image(fn ($get) => $get('type') === 'image')
                                    ->optimize(fn ($get) => $get('type') === 'image' ? 'webp' : null),

                                // Mobile
                                Forms\Components\FileUpload::make('mobile_file')
                                    ->label(__('app.hero.device_mobile'))
                                    ->directory('hero-gallery/mobile')
                                    ->nullable()
                                    ->acceptedFileTypes(fn ($get) =>
                                    $get('type') === 'image'
                                        ? ['image/png', 'image/jpeg', 'image/webp']
                                        : ['video/mp4', 'video/webm']
                                    )
                                    ->maxSize(fn ($get) =>
                                    $get('type') === 'image' ? 4096 : 15360 // 4MB / 15MB
                                    )
                                    ->image(fn ($get) => $get('type') === 'image')
                                    ->optimize(fn ($get) => $get('type') === 'image' ? 'webp' : null),
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
