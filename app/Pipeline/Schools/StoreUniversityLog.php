<?php

namespace App\Pipeline\Schools;

use App\Models\University;

class StoreUniversityLog
{
    public function handle(University $school, Closure $next): mixed
    {
        activity()
            ->performedOn($school)
            ->causedBy(auth()->user())
            ->withProperties(['name' => $school->name])
            ->log("School created {$school->name} with succesful");

        return $this->redirect('/dashboard');
    }
}
