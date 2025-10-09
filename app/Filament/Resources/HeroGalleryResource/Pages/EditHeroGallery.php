<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

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

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($this->record) && $this->record->id) {
            $id = $this->record->id;

            // Desktop
            if (!empty($data['desktop_file']) && str_contains($data['desktop_file'], '/temp/')) {
                $filename = basename($data['desktop_file']);
                $oldPath  = $data['desktop_file'];
                $newPath  = "uploads/hero-gallery/{$id}/desktop/{$filename}";

                Storage::move($oldPath, $newPath);
                $data['desktop_file'] = $newPath;
            }

            // Mobile
            if (!empty($data['mobile_file']) && str_contains($data['mobile_file'], '/temp/')) {
                $filename = basename($data['mobile_file']);
                $oldPath  = $data['mobile_file'];
                $newPath  = "uploads/hero-gallery/{$id}/mobile/{$filename}";

                Storage::move($oldPath, $newPath);
                $data['mobile_file'] = $newPath;
            }
        }

        return $data;
    }
}
