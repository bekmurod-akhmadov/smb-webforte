<?php

namespace App\Filament\Resources\HandbagGalleryResource\Pages;

use App\Filament\Resources\HandbagGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHandbagGallery extends EditRecord
{
    protected static string $resource = HandbagGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
