<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

beforeEach(fn () => $this->user = User::factory()->create());

it('reset password link screen can be rendered', function (): void {
    get('/forgot-password')
        ->assertStatus(200);
});

it('reset password link can be requested', function (): void {
    Notification::fake();

    post('/forgot-password', ['email' => $this->user->email]);

    Notification::assertSentTo($this->user, ResetPassword::class);
});

test('reset password screen can be rendered', function (): void {
    Notification::fake();

    post('/forgot-password', ['email' => $this->user->email]);

    Notification::assertSentTo($this->user, ResetPassword::class, function ($notification) {
        get('/reset-password/'.$notification->token)
            ->assertStatus(200);

        return true;
    });
});

test('password can be reset with valid token', function (): void {
    Notification::fake();

    $user = User::factory()->create();

    $this->post('/forgot-password', ['email' => $user->email]);

    Notification::assertSentTo($user, ResetPassword::class, function ($notification) use ($user) {
        $response = $this->post('/reset-password', [
            'token' => $notification->token,
            'email' => $user->email,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertSessionHasNoErrors();

        return true;
    });
});
