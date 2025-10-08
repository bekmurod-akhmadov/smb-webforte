<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menu;

class Footer extends Component
{
    public $menus;

    public function __construct()
    {
        $this->menus = Menu::query()
            ->where('position', Menu::POSITION_FOOTER)
            ->where('status', true)
            ->orderBy('sort')
            ->get()
            ->groupBy('group');

    }

    public function render(): View|Closure|string
    {
        return view('components.footer', [
            'menus' => $this->menus,
        ]);
    }
}
