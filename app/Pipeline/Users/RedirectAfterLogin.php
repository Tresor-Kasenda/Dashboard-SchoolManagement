<?php

namespace App\Pipeline\Users;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RedirectAfterLogin
{
    /**
     * @param $user
     * @param $next
     * @return RedirectResponse
     */
    public function handle($user, $next): RedirectResponse
    {
        /** @var User $user */
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
