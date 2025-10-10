<?php

namespace App\Filament\Resources\HandbagGalleryResource\Pages;

use App\Filament\Resources\HandbagGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHandbagGallery extends ViewRecord
{
    protected static string $resource = HandbagGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
