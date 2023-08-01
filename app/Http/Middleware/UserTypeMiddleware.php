<?php

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
        
        if ($request->user()->user_type === UserTypeEnum::USER_STUDENT) {
            $request->user()->hasConfiguredApplication() ?
                to_route('dashboard')
                    ->with('success', "Welcome {$request->user()->name} to E Learning") :
                to_route('process.index')
                    ->with("Welcome {$request->user()->name} to Process application configuration", 'success');
        } else {
            ($request->user()->hasConfiguredApplication() ?
                to_route('dashboard')
                    ->with('success', "Welcome {$request->user()->name} to E Learning") :
                to_route('process.index')
                    ->with("Welcome {$request->user()->name} to Process application configuration", 'success'));
        }

        return $next($request);
    }
}
