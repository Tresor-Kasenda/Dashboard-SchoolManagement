<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Actions\Users\StoreUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\Users\StoreUserRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * @template T
 */
final class RegisteredUserController extends Controller
{
    public function __construct(
        protected readonly StoreUserAction $action
    )
    {
    }

    /**
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        return $this->action->handle($request);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('auth.register');
    }
}
