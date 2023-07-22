<?php

declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\User;
use App\Providers\RouteServiceProvider;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(function (): void {
    $this->user = User::factory()->create();
});

it('login screen can be rendered', function (): void {
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();

    get('/login')
        ->assertStatus(200);
});

it('users can authenticate using the login screen', function (): void {
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();
    post('/login', [
        'email' => $this->user->email,
        'password' => 'password',
    ])->assertRedirect(RouteServiceProvider::HOME);

    $this->assertAuthenticated()
        ->assertAuthenticatedAs($this->user);

    expect(auth()->user()->email)
        ->toBe($this->user->email)
        ->and(auth()->user()->name);
});

it('users can not authenticate with invalid password', function (): void {
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();
    post(route('login'), [
        'email' => $this->user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();

    expect(auth()->user())
        ->toBeNull();
});

it('users can not authenticate with invalid email', function (): void {
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();
    post(route('login'), [
        'email' => '',
        'password' => $this->user->password,
    ])
        ->assertSessionHasErrors('email');
    $this->assertGuest();

    expect(auth()->user())
        ->toBeNull();
});


it('users can not authenticate with invalid credentials', function (): void {
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();
    post(route('login'), [
        'email' => 'invalid-email',
        'password' => 'password',
    ]);

    $this->assertGuest();

    expect(auth()->user())
        ->toBeNull();
});
