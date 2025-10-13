<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getBySlug(string $slug): ?Category
    {
        return Category::where('slug', $slug)->first();
    }

    public function getWithSubcategoriesAndProducts(Category $category): array
    {
        return [
            'subcategories' => $category->subcategories()
                ->where('status', 1)
                ->orderBy('sort')
                ->get(),

            'products' => $category->products()
                ->active()
                ->with([
                    'variants' => fn($q) => $q->where('status', 1),
                    'sizeValues' => fn($q) => $q->where('status', 1)->with('size'),
                    'media',
                ])
                ->orderBy('sort')
                ->get(),
        ];
    }
}
