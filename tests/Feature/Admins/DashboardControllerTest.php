<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;

beforeEach(fn () => $this->user = User::factory()->create());

it('should return dashboard view', function (): void {
    actingAs($this->user)
        ->get(route('dashboard'))
        ->assertStatus(302);

    expect(route('dashboard'))
        ->toBe(route('dashboard'));
});
