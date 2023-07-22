<?php

declare(strict_types=1);

namespace App\Actions\Users;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class StoreUserAction
{
    /**
     * @param  StoreUserRequest  $request
     * @return RedirectResponse
     */
    public function handle(StoreUserRequest $request): RedirectResponse
    {
        $user = User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->assignRole(
            Role::where('name', '=', 'user')->first()
        );

        activity()->log("");

        activity()
            ->performedOn($user)
            ->causedBy(auth()->user())
            ->withProperties(['email' => $user->email])
            ->log("User created {$user->name} with succesful");

        /** @var User $user */
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
