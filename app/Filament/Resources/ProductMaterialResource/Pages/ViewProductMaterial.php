<?php

namespace App\Filament\Resources\ProductMaterialResource\Pages;

use App\Filament\Resources\ProductMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProductMaterial extends ViewRecord
{
    protected static string $resource = ProductMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
