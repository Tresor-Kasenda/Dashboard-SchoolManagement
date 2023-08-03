<?php

namespace App\Http\Controllers\Admins\Schools;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateSchoolController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application|RedirectResponse
     */
    public function __invoke(Request $request)
    {
        if (auth()->user()->university_id !== null) {
            return to_route('setting.index')
                ->with('danger', 'You are not authorized to access this page.');
        }
        
        return view('admins.schools.create');
    }
}
