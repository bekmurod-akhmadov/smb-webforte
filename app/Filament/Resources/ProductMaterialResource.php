<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductMaterialResource\Pages;
use App\Filament\Resources\ProductMaterialResource\RelationManagers;
use App\Models\ProductMaterial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductMaterialResource extends Resource
{
    protected static ?string $model = ProductMaterial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'catalog';

    protected static ?int $navigationSort = 5;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.catalog');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.product_material_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.product_material_plural');
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
                                Forms\Components\TextInput::make('name')
                                    ->label(__('app.label.name'))
                                    ->required(),

                            ]),

                        Forms\Components\Section::make()
                            ->columnSpan(1)
                            ->schema([

                                Forms\Components\TextInput::make('sort')
                                    ->label(__('app.label.sort'))
                                    ->numeric()
                                    ->required(),

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
                Tables\Columns\TextColumn::make('name')
                    ->label(__('app.label.name'))
                    ->sortable()
                    ->wrap()
                    ->searchable(),

                Tables\Columns\TextColumn::make('sort')
                    ->label(__('app.label.sort'))
                    ->sortable(),

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
                    ->options(ProductMaterial::statusOptions()),
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
            'index' => Pages\ListProductMaterials::route('/'),
            'create' => Pages\CreateProductMaterial::route('/create'),
            'view' => Pages\ViewProductMaterial::route('/{record}'),
            'edit' => Pages\EditProductMaterial::route('/{record}/edit'),
        ];
    }
}
