<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubCategoryResource\Pages;
use App\Filament\Resources\SubCategoryResource\RelationManagers;
use App\Models\Category;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubCategoryResource extends Resource
{
    protected static ?string $model = SubCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.subcategory_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.subcategory_plural');
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

                        Forms\Components\Section::make(__('app.label.content'))
                            ->columnSpan(1)
                            ->schema([

                                Forms\Components\TextInput::make('name')
                                    ->label(__('app.label.name'))
                                    ->required(),

                                Forms\Components\TextInput::make('slug')
                                    ->label(__('app.label.slug'))
                                    ->helperText(__('app.helper.helper_slug'))
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(64)
                                    ->rule('regex:/^[A-Za-z0-9_-]+$/'),
                            ]),

                        Forms\Components\Section::make(__('app.label.settings'))
                            ->columnSpan(1)
                            ->schema([

                                Forms\Components\Select::make('category_id')
                                    ->label(__('app.label.category'))
                                    ->options(Category::listOptions())
                                    ->required()
                                    ->searchable(),

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
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('app.label.category'))
                    ->badge()
                    ->color(fn ($record) => match ($record->category?->slug) {
                        'women' => 'success',
                        'men'   => 'info',
                        default => 'gray',
                    })
                    ->url(fn ($record) => route('filament.admin.resources.categories.view', $record->category_id))
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('app.label.slug'))
                    ->sortable()
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
                    ->options(SubCategory::statusOptions()),

                SelectFilter::make('category_id')
                    ->label(__('app.label.category'))
                    ->options(Category::listOptions()),
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
            'index' => Pages\ListSubCategories::route('/'),
            'create' => Pages\CreateSubCategory::route('/create'),
            'view' => Pages\ViewSubCategory::route('/{record}'),
            'edit' => Pages\EditSubCategory::route('/{record}/edit'),
        ];
    }
}
