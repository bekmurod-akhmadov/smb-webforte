<?php

namespace App\Filament\Resources\MarqueeBannerResource\Pages;

use App\Filament\Resources\MarqueeBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMarqueeBanner extends ViewRecord
{
    protected static string $resource = MarqueeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
