<?php

namespace App\Http\Controllers;

use App\Models\ContentBlock;
use App\Models\HandbagGallery;
use App\Models\HeroGallery;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $hero_slider = HeroGallery::where('status', 1)
            ->orderBy('sort', 'asc')
            ->get();

        $home_delivery_1 = ContentBlock::where('key', 'home_delivery_1')->first();
        $home_delivery_2 = ContentBlock::where('key', 'home_delivery_2')->first();
        $mini_moss       = ContentBlock::where('key', 'home_moni_moss')->first();

        $handbag_gallery = HandbagGallery::where('status', 1)
            ->orderBy('sort', 'asc')
            ->get();

        $products = Product::active()
            ->orderBy('updated_at', 'desc')
            ->take(4)
            ->get();

        $new_products = Product::newActive()
            ->orderBy('updated_at', 'desc')
            ->take(4)
            ->get();

        return view('pages.home', compact(
            'hero_slider',
            'home_delivery_1',
            'home_delivery_2',
            'mini_moss',
            'handbag_gallery',
            'new_products',
            'products'
        ));
    }


    public function about()
    {
        return view('pages.about');
    }
    public function search()
    {
        return view('pages.search');
    }
}
