<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarqueeBanner extends Model
{
    protected $table = 'marquee_banners';

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    protected $fillable = [
        'text',
        'status',
        'sort',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public static function statusOptions(): array
    {
        return [
            self::STATUS_ACTIVE   => __('app.status.active'),
            self::STATUS_INACTIVE => __('app.status.inactive'),
        ];
    }
}
