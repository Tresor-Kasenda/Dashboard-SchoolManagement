<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire\Process;

use App\Livewire\Process\Configuration;
use Livewire\Livewire;
use Tests\TestCase;

final class ConfigurationTest extends TestCase
{
    /** @test */
    public function renders_successfully(): void
    {
        Livewire::test(Configuration::class)
            ->assertStatus(200);
    }
}
