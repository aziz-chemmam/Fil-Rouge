<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
public function handle(Request $request, Closure $next, $role): Response
{
    $user = Auth::user();
    if (!$user || $user->role !== $role) {
        $errorMessage = "You don't have access to this page.";
        abort(403, $errorMessage);
    }

    return $next($request);
}
}
