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

    $this->assertAuthenticated();
});

it('users can not authenticate with invalid password', function (): void {
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();
    post(route('login'), [
        'email' => $this->user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});
