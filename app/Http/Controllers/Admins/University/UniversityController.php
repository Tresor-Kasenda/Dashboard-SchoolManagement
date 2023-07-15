<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admins\University;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view('admins.university.index');
    }
}
