<?php

declare(strict_types=1);

namespace App\Livewire\Process;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Configuration extends Component
{
    public function render(): View
    {
        return view('livewire.process.configuration');
    }

    public function UpdateUser(): void
    {
    }
}
