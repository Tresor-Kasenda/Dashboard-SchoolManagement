<?php

namespace App\Livewire\Forms\School;

use App\Models\University;
use Illuminate\Validation\Rules\Unique;
use Livewire\Attributes\Rule;
use Livewire\Form;

class StoreSchoolForm extends Form
{
    #[Rule([
            'required',
            'string',
            'max:255',
            new Unique(University::class, 'name')]
    )]
    public string $name = '';
    #[Rule([
            'required',
            'regex:/(.+)@(.+)\.(.+)/i',
            'email:rfc,dns',
            new Unique(University::class, 'email')]
    )]
    public string $email = '';
    #[Rule([
            'required',
            'digits:10',
            'numeric',
            new Unique(University::class, 'phone')]
    )]
    public string $phone = '';
    #[Rule(['required', 'string', 'max:255'])]
    public string $address = '';
    #[Rule(['required', 'string', 'max:255', new Unique(University::class, 'initials')])]
    public string $initials = '';
    #[Rule(['required', 'string', 'max:255', new Unique(University::class, 'code')])]
    public string $code = '';
    #[Rule(['required', 'string', 'max:255'])]
    public string $website = '';
}
