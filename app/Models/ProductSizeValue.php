<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSizeValue extends Model
{
    protected $table = 'product_size_values';

    protected $fillable = [
        'product_id',
        'size_id',
        'dimensions',
        'status',
        'sort',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public const STATUS_ACTIVE   = 1;
    public const STATUS_INACTIVE = 0;

    public static function statusOptions(): array
    {
        return [
            self::STATUS_ACTIVE   => __('app.status.active'),
            self::STATUS_INACTIVE => __('app.status.inactive'),
        ];
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'size_id');
    }
}
