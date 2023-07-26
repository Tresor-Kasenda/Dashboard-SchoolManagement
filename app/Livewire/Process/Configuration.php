<?php

declare(strict_types=1);

namespace App\Livewire\Process;

use App\Models\Domain;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Configuration extends Component
{
    public string $student = '';
    public string $school = '';
    public string $domain = '';
    public string $contact = '';
    public string $name = '';
    public string $address = '';
    public string $email = '';
    public string $phone = '';

    public function render(): View
    {
        return view('livewire.process.configuration', [
            'domains' => Domain::query()->get()
        ]);
    }

    public function UpdateUser(): void
    {
        dd($this->student, $this->school);
    }
}
