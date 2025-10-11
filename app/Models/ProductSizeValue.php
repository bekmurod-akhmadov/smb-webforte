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
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'size_id');
    }
}
