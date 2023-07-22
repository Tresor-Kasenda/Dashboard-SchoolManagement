<?php

declare(strict_types=1);

use App\Enums\StatusEnum;
use App\Models\User;

use function Pest\Laravel\actingAs;

beforeEach(function (): void {
    $this->user = User::factory()->create();
    $this->user->status = StatusEnum::ACTIVE->value;
    $this->user->save();
});

it('profile page is displayed', function (): void {
    actingAs($this->user)
        ->get('/profile')
        ->assertOk();
});

it('profile information can be updated', function (): void {
    actingAs($this->user)
        ->patch('/profile', [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ])
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $this->user->refresh();

    $this->assertSame('Test User', $this->user->name);
    $this->assertSame('test@example.com', $this->user->email);
    $this->assertNull($this->user->email_verified_at);
});

it('email verification status is unchanged when the email address is unchanged', function (): void {
    actingAs($this->user)
        ->patch('/profile', [
            'name' => 'Test User',
            'email' => $this->user->email,
        ])
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $this->assertNotNull($this->user->refresh()->email_verified_at);
});

it('user can delete their account', function (): void {
    actingAs($this->user)
        ->delete('/profile', [
            'password' => 'password',
        ])
        ->assertSessionHasNoErrors()
        ->assertRedirect('/');

    $this->assertGuest();
});

it('correct password must be provided to delete account', function (): void {
    actingAs($this->user)
        ->from('/profile')
        ->delete('/profile', [
            'password' => 'wrong-password',
        ])
        ->assertSessionHasErrorsIn('userDeletion', 'password')
        ->assertRedirect('/profile');

    $this->assertNotNull($this->user->fresh());
});

it('password is required to delete account', function (): void {
    actingAs($this->user)
        ->from('/profile')
        ->delete('/profile')
        ->assertSessionHasErrorsIn('userDeletion', 'password')
        ->assertRedirect('/profile');

    $this->assertNotNull($this->user->fresh());
});

it('user can not activate their account', function (): void {
    actingAs($this->user)
        ->patch('/profile', [
            'name' => 'Test User',
            'email' => $this->user->email
        ])
        ->assertSessionHasNoErrors()
        ->assertRedirect('/profile');

    $this->assertNotNull($this->user->refresh()->status);
});
