<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/'); // Redirect to home if user is not authenticated
        }

        // Allow access if user has the specified role or is an admin
        $user = Auth::user();
        if ($user->roles()->where('name', $role)->exists() || $user->roles()->where('name', 'admin')->exists()) {
            return $next($request);
        }

        return redirect('/'); // Redirect to home if user does not have the role
    }
}

