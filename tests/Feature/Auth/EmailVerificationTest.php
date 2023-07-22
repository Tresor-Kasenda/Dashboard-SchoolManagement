<?php

declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;

use function Pest\Laravel\actingAs;

test('email verification screen can be rendered', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    actingAs($user)
        ->get('/verify-email')
        ->assertStatus(200)
        ->assertViewIs('auth.verify-email');

    expect($user->hasVerifiedEmail())
        ->toBeFalse();
});

test('email can be verified', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    Event::fake();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );

    $response = $this->actingAs($user)->get($verificationUrl);

    Event::assertDispatched(Verified::class);
    expect($user->fresh()->hasVerifiedEmail())->toBeTrue();
    $response->assertRedirect(RouteServiceProvider::HOME.'?verified=1');
});

test('email is not verified with invalid hash', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1('wrong-email')]
    );

    $this->actingAs($user)->get($verificationUrl);

    expect($user->fresh()->hasVerifiedEmail())->toBeFalse();
});

test('email is not verified with invalid user id', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => 123, 'hash' => sha1($user->email)]
    );

    $this->actingAs($user)->get($verificationUrl);

    expect($user->fresh()->hasVerifiedEmail())->toBeFalse();
});

test('email is not verified with expired url', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->subMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );

    $this->actingAs($user)->get($verificationUrl);

    expect($user->fresh()->hasVerifiedEmail())->toBeFalse();
});


test('email verification screen cannot be rendered after email is verified', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    actingAs($user)
        ->get('/verify-email')
        ->assertRedirect(RouteServiceProvider::HOME);
});

test('email verification screen cannot be rendered with invalid user', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => 123, 'hash' => sha1($user->email)]
    );

    actingAs($user)
        ->get($verificationUrl)
        ->assertStatus(403);
});


test('email verification screen cannot be rendered with expired url', function (): void {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);
    $user->status = StatusEnum::ACTIVE->value;
    $user->save();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->subMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );

    actingAs($user)
        ->get($verificationUrl)
        ->assertStatus(403);
});
