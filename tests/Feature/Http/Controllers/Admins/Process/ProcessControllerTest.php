<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

describe('verification process access pages', function (): void {
    beforeEach(function (): void {
        $this->user = User::factory()->create();
    });

    it('unauthenticated user cant see process page', function (): void {
        get(route('process.index'))
            ->assertRedirect();
    });

    it('show de route of process controller', function (): void {
        actingAs($this->user)
            ->get(route('process.index'))
            ->assertRedirect();
    });
});
