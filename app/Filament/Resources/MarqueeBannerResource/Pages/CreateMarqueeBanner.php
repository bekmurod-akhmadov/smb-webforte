<?php

namespace App\Filament\Resources\MarqueeBannerResource\Pages;

use App\Filament\Resources\MarqueeBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMarqueeBanner extends CreateRecord
{
    protected static string $resource = MarqueeBannerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
