<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\UserTypeEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

final class UniversityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            null === Auth::user()->university_id &&
            $request->user()->user_type === UserTypeEnum::USER_SCHOOL_MANAGEMENT
        ) {
            dd($request);
            return to_route('process.index');
        }

        return $next($request);
    }
}
