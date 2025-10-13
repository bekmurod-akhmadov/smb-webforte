<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ContentBlock extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'content_blocks';

    public const STATUS_ACTIVE   = 1;
    public const STATUS_INACTIVE = 0;

    protected $fillable = [
        'key',
        'text',
        'button_text',
        'button_link',
        'is_external',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_external',
    ];

    /** ───── Media ───── */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('webp')
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
}
