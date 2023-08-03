<?php

namespace App\Livewire\Admins\Schools;

use App\Livewire\Forms\School\StoreSchoolForm;
use App\Models\University;
use App\Pipeline\Schools\StoreUniversityLog;
use App\Pipeline\Schools\UpdateUniversityProcess;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Pipeline;
use Livewire\Component;

class StoreSchool extends Component
{
    public StoreSchoolForm $form;

    protected array $pipelines = [
        UpdateUniversityProcess::class,
        StoreUniversityLog::class
    ];

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.admins.schools.store-school');
    }


    public function save()
    {
        $school = University::query()
            ->create($this->form->all());

        return Pipeline::send($school)
            ->through($this->pipelines)
            ->thenReturn();
    }
}
