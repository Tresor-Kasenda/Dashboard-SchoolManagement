<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\UserTypeEnum;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @template T
 */
class UserTypeMiddleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (UserTypeEnum::USER_STUDENT === $request->user()->user_type) {

        }

        return $next($request);
    }
}
