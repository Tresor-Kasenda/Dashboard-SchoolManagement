<?php

declare(strict_types=1);

use App\Models\Domain;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
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
        $domains = Domain::factory()
            ->for(User::factory())
            ->count(3)
            ->create();

        actingAs($this->user)
            ->get(route('process.index', [
                'domains' => $domains->all()
            ]))
            ->assertRedirect();

        expect($domains)
            ->toBeInstanceOf(Collection::class);
    });
});
