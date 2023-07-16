<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BackendLayout extends Component
{
    /**
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('layouts.backend');
    }
}
