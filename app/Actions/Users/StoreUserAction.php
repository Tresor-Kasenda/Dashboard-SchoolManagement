<?php

declare(strict_types=1);

namespace App\Actions\Users;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Pipeline\Users\AssignRoleToUser;
use App\Pipeline\Users\RedirectAfterLogin;
use App\Pipeline\Users\UserLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Pipeline;

final class StoreUserAction
{
    private array $pipeline = [
        AssignRoleToUser::class,
        UserLogger::class,
        RedirectAfterLogin::class
    ];

    /**
     * @param StoreUserRequest $request
     * @return RedirectResponse
     */
    public function handle(StoreUserRequest $request): RedirectResponse
    {
        $user = User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return Pipeline::send($user)
            ->through($this->pipeline)
            ->thenReturn();
    }
}
