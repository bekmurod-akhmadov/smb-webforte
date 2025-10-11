<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Repositories\SubcategoryRepository;

class SubCategoryController extends Controller
{
    protected SubcategoryRepository $repo;

    public function __construct(SubcategoryRepository $repo)
    {
        $this->repo = $repo;
    }

    public function show(Category $category, Subcategory $subcategory)
    {

        $products = $this->repo->getProducts($subcategory);

        return view('pages.subcategory.show', [
            'category'    => $category,
            'subcategories'=> $subcategory,
            'products'   => $products,
        ]);
    }
}
