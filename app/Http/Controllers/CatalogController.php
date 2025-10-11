<?php

namespace App\Http\Controllers;

use App\Repositories\SubCategoryRepository;

class CatalogController extends Controller
{
    protected SubCategoryRepository $subcategoryRepository;

    public function __construct(SubCategoryRepository $subcategoryRepository)
    {
        $this->subcategoryRepository = $subcategoryRepository;
    }

    public function index()
    {
        $subcategories = $this->subcategoryRepository->getActiveSubcategoriesWithProducts();

        return view('pages.catalog.index', compact('subcategories'));
    }
}
