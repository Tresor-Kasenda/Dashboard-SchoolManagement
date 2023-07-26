<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire\Process;

use App\Livewire\Process\Configuration;
use App\Models\User;

use function Pest\Laravel\actingAs;

beforeEach(fn () => $this->user = User::factory()->create());

describe('livewire first test', function (): void {

    it('can render livewire component', function (): void {
        actingAs($this->user)
            ->get(route('process.index'))
            ->assertSeeLivewire(Configuration::class);
    });
});
