<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureOwnerIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->route("owner")->id !== $request->route("animal")->owner_id) {
            abort(404, "Animal ID does not match Owner ID.");
        }

        return $next($request);
    }
}
