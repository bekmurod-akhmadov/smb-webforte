<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HandbagGallery extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'handbag_gallery';

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    public const STYLE_DEFAULT = 0;
    public const STYLE_ALT1    = 1;
    public const STYLE_ALT2    = 2;

    protected $fillable = [
        'username',
        'text',
        'style',
        'sort',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /** ───── Media ───── */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->format('webp')
            ->quality(80)
            ->nonQueued();
    }

    /** ───── Options ───── */
    public static function statusOptions(): array
    {
        return [
            self::STATUS_ACTIVE   => __('app.status.active'),
            self::STATUS_INACTIVE => __('app.status.inactive'),
        ];
    }

    public static function styleOptions(): array
    {
        return [
            self::STYLE_DEFAULT => __('app.label.style_default'),
            self::STYLE_ALT1    => __('app.label.style_alt1'),
            self::STYLE_ALT2    => __('app.label.style_alt2'),
        ];
    }
}
