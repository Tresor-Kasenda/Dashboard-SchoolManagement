<?php

namespace App\Pipeline\Schools;

use App\Models\University;
use Illuminate\Http\RedirectResponse;

class UpdateUniversityProcess
{
    public function handle(University $school, $next): RedirectResponse
    {
        auth()->user()->update([
            'university_id' => $school->id
        ]);

        return $next($school);
    }
}
