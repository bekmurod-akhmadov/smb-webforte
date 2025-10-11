<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'materials',
        'sizes',
        'is_new',
        'name',
        'slug',
        'price',
        'old_price',
        'description',
        'material_description',
        'care_description',
        'delivery_description',
        'capacity',
        'sort',
        'status',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_new' => 'boolean',
        'price' => 'decimal:2',
        'old_price' => 'decimal:2',
        'materials' => 'array',
        'sizes' => 'array',
        'delivery_description' => 'array',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function sizeValues()
    {
        return $this->hasMany(ProductSizeValue::class, 'product_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('preview_image')
            ->singleFile();

        $this->addMediaCollection('gallery');
    }
}
