<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentBlockResource\Pages;
use App\Filament\Resources\ContentBlockResource\RelationManagers;
use App\Models\ContentBlock;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentBlockResource extends Resource
{
    protected static ?string $model = ContentBlock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return __('app.label.resources');
    }

    public static function getModelLabel(): string
    {
        return __('app.label.content_block_single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('app.label.content_block_plural');
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

                                Forms\Components\RichEditor::make('title')
                                    ->label(__('app.label.title'))
                                    ->required(),

                                Forms\Components\RichEditor::make('text')
                                    ->label(__('app.label.text')),

                                Forms\Components\SpatieMediaLibraryFileUpload::make('image')
                                    ->collection('image')
                                    ->label(__('app.label.image'))
                                    ->image()
                                    ->downloadable()
                                    ->openable()
                                    ->imageEditor()
                                    ->imageEditorMode(3)
                                    ->required()
                                    ->optimize('png')
                                    ->acceptedFileTypes(['image/png']),

                            ]),

                        Forms\Components\Section::make(__('app.label.settings'))
                            ->columnSpan(1)
                            ->schema([

                                Forms\Components\TextInput::make('key')
                                    ->label(__('app.label.key'))
                                    ->required()
                                    ->unique(ignoreRecord: true),

                                Forms\Components\TextInput::make('button_text')
                                    ->label(__('app.label.button_text')),

                                Forms\Components\TextInput::make('button_link')
                                    ->label(__('app.label.button_link'))
                                    ->required(),

                                Forms\Components\Toggle::make('is_external')
                                    ->label(__('app.label.is_external'))
                                    ->default(false),

                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('updated_at', 'desc')
            ->columns([

                Tables\Columns\TextColumn::make('key')
                    ->label(__('app.label.key'))
                    ->sortable()
                    ->wrap()
                    ->searchable(),

                Tables\Columns\TextColumn::make('text')
                    ->label(__('app.label.text'))
                    ->sortable()
                    ->wrap()
                    ->html()
                    ->searchable(),

                SpatieMediaLibraryImageColumn::make('image')
                    ->collection('image')
                    ->label(__('app.label.image'))
                    ->square()
                    ->height(75),

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
                    ->options(ContentBlock::statusOptions()),
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
            'index' => Pages\ListContentBlocks::route('/'),
            'create' => Pages\CreateContentBlock::route('/create'),
            'view' => Pages\ViewContentBlock::route('/{record}'),
            'edit' => Pages\EditContentBlock::route('/{record}/edit'),
        ];
    }
}
