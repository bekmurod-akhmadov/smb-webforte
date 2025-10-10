<?php

namespace App\Repositories;

use App\Models\Subcategory;

class SubCategoryRepository
{
    public function getProducts(Subcategory $subcategory)
    {
        return $subcategory->products()
            ->where('status', true)
            ->orderBy('sort')
            ->get();
    }
}
