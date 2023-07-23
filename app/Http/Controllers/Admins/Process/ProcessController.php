<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admins\Process;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('admins.process.index');
    }
}
