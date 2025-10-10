<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getBySlug(string $slug): ?Category
    {
        return Category::where('slug', $slug)->first();
    }

    public function getWithSubcategoriesAndProducts(Category $category)
    {
        return [
            'subcategories' => $category->subcategories,
            'products' => $category->products,
        ];
    }
}
