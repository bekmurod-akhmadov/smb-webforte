<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroGallery extends CreateRecord
{
    protected static string $resource = HeroGalleryResource::class;
}
