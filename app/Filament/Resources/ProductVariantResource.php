<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductVariantResource\Pages;
use App\Filament\Resources\ProductVariantResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductVariant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductVariantResource extends Resource
{
    protected static ?string $model = ProductVariant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'catalog';

    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.catalog');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.product_variant_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.product_variant_plural');
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
                    ->columns(1)
                    ->schema([

                        Forms\Components\Select::make('product_id')
                            ->label(__('app.label.product'))
                            ->relationship('product', 'name')
                            ->required()
                            ->searchable(),

                        Forms\Components\Repeater::make('variants')
                            ->label(__('app.label.variants'))
                            ->relationship('variants') 
                            ->schema([

                                Forms\Components\TextInput::make('color_name')
                                    ->label(__('app.label.color_name'))
                                    ->required(),

                                Forms\Components\ColorPicker::make('color_code')
                                    ->label(__('app.label.color_code')),

                                Forms\Components\SpatieMediaLibraryFileUpload::make('variant_image')
                                    ->collection('variant_image')
                                    ->label(__('app.label.variant_image'))
                                    ->image()
                                    ->downloadable()
                                    ->openable()
                                    ->imageEditor()
                                    ->imageEditorMode(3)
                                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp'])
                                    ->required(),

                                Forms\Components\TextInput::make('sort')
                                    ->label(__('app.label.sort'))
                                    ->numeric()
                                    ->default(0),

                                Forms\Components\Toggle::make('status')
                                    ->label(__('app.label.status'))
                                    ->default(true),
                            ])
                            ->columns(2)
                            ->collapsible()
                            ->defaultItems(1),
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
            'index' => Pages\ListProductVariants::route('/'),
            'create' => Pages\CreateProductVariant::route('/create'),
            'view' => Pages\ViewProductVariant::route('/{record}'),
            'edit' => Pages\EditProductVariant::route('/{record}/edit'),
        ];
    }
}
