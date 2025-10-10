<?php

namespace App\Services;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PathGenerator implements \Spatie\MediaLibrary\Support\PathGenerator\PathGenerator
{
    public function getPath(Media $media): string
    {
        $modelName = Str::kebab(class_basename($media->model_type));

        return "/uploads/{$modelName}/{$media->model_id}/";
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media).'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'responsive/';
    }
}
