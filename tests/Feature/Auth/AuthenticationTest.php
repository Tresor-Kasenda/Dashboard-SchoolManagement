<?php

declare(strict_types=1);

use App\Models\User;
use App\Providers\RouteServiceProvider;
use function Pest\Laravel\get;

beforeEach(function (): void {
    $this->user = User::factory()->create();
});

test('login screen can be rendered', function (): void {
    get('/login')
        ->assertStatus(200);
});

test('users can authenticate using the login screen', function (): void {
    $user = User::factory()->create();

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(RouteServiceProvider::HOME);
});

test('users can not authenticate with invalid password', function (): void {
    $user = User::factory()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});
