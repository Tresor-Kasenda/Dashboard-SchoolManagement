<?php

declare(strict_types=1);

namespace App\Pipeline\Users;

use App\Enums\UserTypeEnum;
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
        if (UserTypeEnum::USER_SCHOOL_MANAGEMENT === $user->user_type) {
            $user->assignRole(
                Role::where('name', '=', 'admin')->first()
            );
        }

        return $next($user);
    }
}
