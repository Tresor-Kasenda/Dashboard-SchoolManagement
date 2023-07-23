<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admins\Sessions;

use App\Http\Controllers\Admins\Process\ProcessController;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View|RedirectResponse
    {
        return null === auth()->user()->university_id ?
            view('admins.sessions.create') :
            redirect()->intended(ProcessController::class);
    }
}
