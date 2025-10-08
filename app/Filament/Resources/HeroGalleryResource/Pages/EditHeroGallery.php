<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroGallery extends EditRecord
{
    protected static string $resource = HeroGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
