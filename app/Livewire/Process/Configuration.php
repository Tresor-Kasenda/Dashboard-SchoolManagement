<?php

declare(strict_types=1);

namespace App\Livewire\Process;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Configuration extends Component
{
    public function rules(): array
    {

    }

    public function render(): View
    {
        return view('livewire.process.configuration');
    }

    public function UpdateUser(): void
    {
    }
}
