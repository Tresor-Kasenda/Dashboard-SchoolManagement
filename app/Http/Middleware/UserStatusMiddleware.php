<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\StatusEnum;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (StatusEnum::ACTIVE !== $request->user()->status) {
            return response()->json([
                'message' => 'Your account is not active.',
            ], 403);
        }
        return $next($request);
    }
}
