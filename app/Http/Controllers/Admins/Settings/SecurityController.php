<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admins.settings.security');
    }
}
