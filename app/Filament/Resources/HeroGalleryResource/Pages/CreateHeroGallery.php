<?php

namespace App\Filament\Resources\HeroGalleryResource\Pages;

use App\Filament\Resources\HeroGalleryResource;
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
        // пока сохраняем как есть, в temp
        return $data;
    }

    protected function afterCreate(): void
    {
        $record = $this->record;

        $tempDesktop = "uploads/hero-gallery/temp/desktop";
        $tempMobile  = "uploads/hero-gallery/temp/mobile";

        $finalDesktop = "uploads/hero-gallery/{$record->id}/desktop";
        $finalMobile  = "uploads/hero-gallery/{$record->id}/mobile";

        // переносим если есть временные файлы
        if ($record->desktop_file && Storage::disk('public')->exists("$tempDesktop/{$record->desktop_file}")) {
            Storage::disk('public')->move("$tempDesktop/{$record->desktop_file}", "$finalDesktop/{$record->desktop_file}");
            $record->update(['desktop_file' => "{$finalDesktop}/{$record->desktop_file}"]);
        }

        if ($record->mobile_file && Storage::disk('public')->exists("$tempMobile/{$record->mobile_file}")) {
            Storage::disk('public')->move("$tempMobile/{$record->mobile_file}", "$finalMobile/{$record->mobile_file}");
            $record->update(['mobile_file' => "{$finalMobile}/{$record->mobile_file}"]);
        }
    }
}
