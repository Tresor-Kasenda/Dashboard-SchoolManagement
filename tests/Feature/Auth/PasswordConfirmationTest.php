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

test('confirm password screen can be rendered', function (): void {
    actingAs($this->user)
        ->get('/confirm-password')
        ->assertStatus(200);
});

test('password can be confirmed', function (): void {
    actingAs($this->user)->post('/confirm-password', [
        'password' => 'password',
    ])
        ->assertRedirect()
        ->assertSessionHasNoErrors();

    expect(auth()->check())->toBeTrue();
});
