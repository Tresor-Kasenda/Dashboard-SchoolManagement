<?php

namespace App\Http\Controllers\Admins\Process;

use App\Actions\Process\PersistProcess;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ReflectionClass;

class StoreProcessController extends Controller
{
    public function __construct(
        protected readonly PersistProcess $process
    )
    {
    }

    public function __invoke(Request $request)
    {
        $inputs = new ReflectionClass($request);
        dd($request, $inputs);
    }
}
