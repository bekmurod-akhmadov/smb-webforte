<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeroGalleries extends ListRecords
{
    protected static string $resource = HeroGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
