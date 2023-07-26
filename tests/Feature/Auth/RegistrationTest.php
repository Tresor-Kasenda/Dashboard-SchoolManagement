<?php

declare(strict_types=1);

use App\Models\University;
use App\Providers\RouteServiceProvider;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

it('registration screen can be rendered', function (): void {
    get(route('register'))
        ->assertStatus(200);
});

it('new users can not register without required information', function (): void {
    post(route('register'), [
        'name' => '',
        'email' => '',
        'password' => '',
        'university' => '',
    ])->assertStatus(302)
        ->assertSessionHasErrors([
            'name' => 'The name field is required.',
            'email' => 'The email field is required.',
            'password' => 'The password field is required.',
        ]);
});


it('new users can not register without valid email', function (): void {
    post(route('register'), [
        'name' => 'Test User',
        'email' => 'invalid-email',
        'password' => 'password1T',
        'university' => University::factory()->create()->id,
    ])->assertStatus(302)
        ->assertSessionHasErrors([
            'email' => 'The email field must be a valid email address.',
        ]);
});

it('new users can not register without valid password', function (): void {
    post(route('register'), [
        'name' => 'Test User',
        'email' => 'test@example',
        'password' => '12388888',
        'university' => University::factory()->create()->id,
    ])->assertStatus(302)
        ->assertSessionHasErrors([
            'password' => 'The password field must contain at least one uppercase and one lowercase letter.',
        ]);
});

it('new users can register', function (): void {
    post(route('register'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password1T',
        'password_confirmation' => 'password1T',
        'university' => University::factory()->create()->id,
    ])->assertRedirect(RouteServiceProvider::HOME);

    $this->assertAuthenticated();
});
