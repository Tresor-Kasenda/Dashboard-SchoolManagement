<?php

namespace App\Pipeline\Users;

use App\Models\User;
use Closure;

class UserLogger
{
    /**
     * @param User $user
     * @param Closure $next
     * @return mixed
     */
    public function handle(User $user, Closure $next): mixed
    {
        activity()
            ->performedOn($user)
            ->causedBy(auth()->user())
            ->withProperties(['email' => $user->email])
            ->log("User created {$user->name} with succesful with default role user");

        return $next($user);
    }
}
