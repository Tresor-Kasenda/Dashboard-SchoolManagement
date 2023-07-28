<?php

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
        if (request()->input('user_type') === UserTypeEnum::USER_STUDENT) {
            $user->update([
                'university_id' => University::query()
                    ->where('name', '=', 'Vinco')
                    ->first()->id
            ]);
        }

        return $next($user);
    }
}
