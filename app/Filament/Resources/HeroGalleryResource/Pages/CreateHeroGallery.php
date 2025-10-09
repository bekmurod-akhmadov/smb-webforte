<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
use App\Models\HeroGallery;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateHeroGallery extends CreateRecord
{
    protected static string $resource = HeroGalleryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Получаем следующий ID (будущий auto-increment)
        $nextId = HeroGallery::max('id') + 1;

        // Перенос desktop файла
        if (!empty($data['desktop_file'])) {
            $filename = basename($data['desktop_file']);
            $oldPath  = $data['desktop_file'];
            $newPath  = "uploads/hero-gallery/{$nextId}/desktop/{$filename}";

            Storage::move($oldPath, $newPath);
            $data['desktop_file'] = $newPath;
        }

        // Перенос mobile файла
        if (!empty($data['mobile_file'])) {
            $filename = basename($data['mobile_file']);
            $oldPath  = $data['mobile_file'];
            $newPath  = "uploads/hero-gallery/{$nextId}/mobile/{$filename}";

            Storage::move($oldPath, $newPath);
            $data['mobile_file'] = $newPath;
        }

        return $data;
    }
}
