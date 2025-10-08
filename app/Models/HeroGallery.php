<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroGallery extends Model
{
    protected $table = 'hero_galleries';

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    public const TYPE_IMAGE = 'image';
    public const TYPE_VIDEO = 'video';

    protected $fillable = [
        'type',
        'desktop_file',
        'mobile_file',
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
}
