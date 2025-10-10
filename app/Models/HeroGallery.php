<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HeroGallery extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'hero_galleries';

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    public const TYPE_IMAGE = 'image';
    public const TYPE_VIDEO = 'video';

    protected $fillable = [
        'type',
        'sort',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /** ───── Options ───── */
    public static function statusOptions(): array
    {
        return [
            self::STATUS_ACTIVE   => __('app.status.active'),
            self::STATUS_INACTIVE => __('app.status.inactive'),
        ];
    }

    public static function typeOptions(): array
    {
        return [
            self::TYPE_IMAGE => __('app.label.type_image'),
            self::TYPE_VIDEO => __('app.label.type_video'),
        ];
    }

    /** ───── Media Collections ───── */
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('desktop')
            ->singleFile();

        $this
            ->addMediaCollection('mobile')
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->format('webp')
            ->quality(80)
            ->nonQueued();
    }

}
