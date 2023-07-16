<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if ( ! Auth::check()) {
            return redirect()
                ->route('login')
                ->with('error', 'You must be logged in!');
        }

        if ( ! $request->user()->hasRole($role)->exists()) {
            return redirect()
                ->route('home')
                ->with('error', 'You do not have permission to access!');
        }

        return $next($request);
    }
}
