<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire\Process;

use App\Models\User;

beforeEach(fn () => $this->user = User::factory()->create());

describe('livewire first test', function (): void {

    it('can render livewire component', function (): void {
    })->todo();
});
