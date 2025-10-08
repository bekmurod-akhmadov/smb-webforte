<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHeroGallery extends ViewRecord
{
    protected static string $resource = HeroGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
