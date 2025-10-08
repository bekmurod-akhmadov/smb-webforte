<?php

namespace App\View\Components;

use App\Models\MarqueeBanner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Marquee extends Component
{
    public $marquees;

    public function __construct()
    {
        $this->marquees = MarqueeBanner::query()
            ->where('status', true)
            ->orderBy('sort')
            ->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.marquee');
    }
}
