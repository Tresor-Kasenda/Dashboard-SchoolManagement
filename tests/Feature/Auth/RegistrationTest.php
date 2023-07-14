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

it('new users can register', function (): void {
    post(route('register'), [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'username' => 'kasenda',
        'firstname' => 'Test',
        'phone_number' => '081234567890',
        'university' => University::factory()->create()->id,
    ])->assertRedirect(RouteServiceProvider::HOME);

    $this->assertAuthenticated();
});
