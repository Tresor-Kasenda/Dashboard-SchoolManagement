<?php

declare(strict_types=1);

namespace App\Pipeline\Users;

use App\Enums\UserTypeEnum;
use App\Models\University;
use App\Models\User;
use Closure;

class StudentUniversity
{
    /**
     * @param User $user
     * @param Closure $next
     * @return mixed
     */
    public function handle(User $user, Closure $next): mixed
    {
        if (UserTypeEnum::USER_STUDENT === request()->input('user_type')) {
            $user->update([
                'university_id' => University::query()
                    ->where('name', '=', 'Vinco')
                    ->first()->id
            ]);
        }

        return $next($user);
    }
}
