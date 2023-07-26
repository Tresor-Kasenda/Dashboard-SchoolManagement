<?php

declare(strict_types=1);

namespace App\Pipeline\Users;

use App\Models\User;
use Closure;
use Spatie\Permission\Models\Role;

class AssignRoleToUser
{
    /**
     * @param User $user
     * @param Closure $next
     * @return mixed
     */
    public function handle(User $user, Closure $next): mixed
    {
        $user->assignRole(Role::where('name', '=', 'user')->first());
        return $next($user);
    }
}
