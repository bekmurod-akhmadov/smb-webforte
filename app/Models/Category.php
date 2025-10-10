<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public const STATUS_ACTIVE   = 1;
    public const STATUS_INACTIVE = 0;

    protected $fillable = [
        'name',
        'slug',
        'sort',
        'status',
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

    public static function listOptions(): array
    {
        return self::query()
            ->where('status', self::STATUS_ACTIVE)
            ->orderBy('sort')
            ->pluck('name', 'id')
            ->toArray();
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'subcategory_id');
    }

}
