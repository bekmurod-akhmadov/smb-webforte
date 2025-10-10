<?php

namespace App\Http\Controllers;

use App\Models\ContentBlock;
use App\Models\HeroGallery;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $hero_slider = HeroGallery::where('status', 1)
            ->orderBy('sort', 'asc')
            ->get();

        $home_delivery_1 = ContentBlock::where('key', 'home_delivery_1')
            ->first();

        $home_delivery_2 = ContentBlock::where('key', 'home_delivery_2')
            ->first();

        return view('pages.home', compact('hero_slider', 'home_delivery_1', 'home_delivery_2'));
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
