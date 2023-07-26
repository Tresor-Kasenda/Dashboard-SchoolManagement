<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImageComponent extends Component
{
    use WithFileUploads;

    public $images = [];

    public function updateProfile(): void
    {

    }

    public function render(): View
    {
        return view('livewire.upload-image-component');
    }
}
