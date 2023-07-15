<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admins\University;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * @param  Request  $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        if (auth()->user()->university_id === null) {
            return view('admins.university.index');
        }
        return view('');
    }
}
