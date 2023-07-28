<?php

declare(strict_types=1);

namespace App\Actions\Users;

use App\Http\Requests\Admins\Users\StoreUserRequest;
use App\Models\User;
use App\Pipeline\Users\AssignRoleToUser;
use App\Pipeline\Users\RedirectAfterLogin;
use App\Pipeline\Users\StudentUniversity;
use App\Pipeline\Users\UserLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Pipeline;

class StoreUserAction
{
    private array $pipeline = [
        AssignRoleToUser::class,
        UserLogger::class,
        RedirectAfterLogin::class,
        StudentUniversity::class
    ];

    /**
     * @param StoreUserRequest|array $request
     * @return RedirectResponse
     */
    public function handle(StoreUserRequest|array $request): RedirectResponse
    {
        $user = User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => $request->input('user_type'),
        ]);

        return Pipeline::send($user)
            ->through($this->pipeline)
            ->thenReturn();
    }
}
