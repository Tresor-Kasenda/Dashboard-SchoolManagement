<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admins\University;

use App\Actions\University\StoreUniversityAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\University\StoreUniversityRequest;

class StoreUniversityController extends Controller
{
    /**
     * @param  StoreUniversityAction  $action
     */
    public function __construct(
        protected readonly StoreUniversityAction $action
    ) {
    }

    public function __invoke(StoreUniversityRequest $request)
    {
        
    }
}
