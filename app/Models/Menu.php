<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    public const POSITION_HEADER = 1;
    public const POSITION_FOOTER = 2;

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    public const TARGET_SELF = '_self';
    public const TARGET_BLANK = '_blank';

    public const GROUP_NAVIGATION   = 'navigation';
    public const GROUP_BUYERS   = 'buyers';
    public const GROUP_SECURITY = 'security';

    protected $table = 'menus';

    protected $fillable = [
        'title',
        'url',
        'target',
        'position',
        'group',
        'parent_id',
        'sort',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    /** ───── Relations ───── */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort');
    }

    /** ───── Options ───── */
    public static function positionOptions(): array
    {
        return [
            self::POSITION_HEADER => __('app.menu.header'),
            self::POSITION_FOOTER => __('app.menu.footer'),
        ];
    }

    public static function statusOptions(): array
    {
        return [
            self::STATUS_ACTIVE   => __('app.status.active'),
            self::STATUS_INACTIVE => __('app.status.inactive'),
        ];
    }

    public static function targetOptions(): array
    {
        return [
            self::TARGET_SELF  => __('app.menu.target_self'),
            self::TARGET_BLANK => __('app.menu.target_blank'),
        ];
    }
    public static function groupOptions(): array
    {
        return [
            self::GROUP_NAVIGATION   => __('app.menu.group_navigation'),
            self::GROUP_BUYERS   => __('app.menu.group_buyers'),
            self::GROUP_SECURITY => __('app.menu.group_security'),
        ];
    }
}
