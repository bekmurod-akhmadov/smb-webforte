<?php

namespace App\Filament\Resources\MarqueeBannerResource\Pages;

use App\Filament\Resources\MarqueeBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarqueeBanner extends EditRecord
{
    protected static string $resource = MarqueeBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
