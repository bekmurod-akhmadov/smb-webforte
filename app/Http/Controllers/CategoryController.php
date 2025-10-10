<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected CategoryRepository $repo;

    public function __construct(CategoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function show(Category $category)
    {
        $data = $this->repo->getWithSubcategoriesAndProducts($category);

        return view('pages.category.show', [
            'category' => $category,
            'subcategories' => $data['subcategories'],
            'products' => $data['products'],
        ]);
    }
}
